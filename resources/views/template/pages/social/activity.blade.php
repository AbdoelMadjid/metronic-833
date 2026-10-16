@extends('layouts.metronic')

@section('body_attributes')
id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default"
@endsection

@section('page_title')
Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes
@endsection

@section('toolbar')
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6 metronic-toolbar-separated">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Social Activity</h1>
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
											<li class="breadcrumb-item text-muted">Social</li>
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
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_69981c2a905a4">
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
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_69981c2a905a4" data-allow-clear="true">
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
									<!--begin::Social - Activity -->
									<div class="d-flex flex-row">
										<!--begin::Start sidebar-->
										<div class="d-lg-flex flex-column flex-lg-row-auto w-lg-325px" data-kt-drawer="true" data-kt-drawer-name="start-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_social_start_sidebar_toggle">
											<!--begin::User menu-->
											<div class="card mb-5 mb-xl-8">
												<!--begin::Body-->
												<div class="card-body pt-15 px-0">
													<!--begin::Member-->
													<div class="d-flex flex-column text-center mb-9 px-9">
														<!--begin::Photo-->
														<div class="symbol symbol-80px symbol-lg-150px mb-4">
															<img src="assets/media/avatars/300-3.jpg" class="" alt="" />
														</div>
														<!--end::Photo-->
														<!--begin::Info-->
														<div class="text-center">
															<!--begin::Name-->
															<a href="{{ route('metronic.pages.user_profile.overview') }}" class="text-gray-800 fw-bold text-hover-primary fs-4">Jerry Kane</a>
															<!--end::Name-->
															<!--begin::Position-->
															<span class="text-muted d-block fw-semibold">Grade 8, AE3 Student</span>
															<!--end::Position-->
														</div>
														<!--end::Info-->
													</div>
													<!--end::Member-->
													<!--begin::Row-->
													<div class="row px-9 mb-4">
														<!--begin::Col-->
														<div class="col-md-4 text-center">
															<div class="text-gray-800 fw-bold fs-3">
																<span class="m-0" data-kt-countup="true" data-kt-countup-value="642">0</span>
															</div>
															<span class="text-gray-500 fs-8 d-block fw-bold">POSTS</span>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-md-4 text-center">
															<div class="text-gray-800 fw-bold fs-3">
															<span class="m-0" data-kt-countup="true" data-kt-countup-value="24">0</span>K</div>
															<span class="text-gray-500 fs-8 d-block fw-bold">FOLLOWERS</span>
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-md-4 text-center">
															<div class="text-gray-800 fw-bold fs-3">
															<span class="m-0" data-kt-countup="true" data-kt-countup-value="12">0</span>K</div>
															<span class="text-gray-500 fs-8 d-block fw-bold">FOLLOWING</span>
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
													<!--begin::Navbar-->
													<div class="m-0">
														<!--begin::Navs-->
														<ul class="nav nav-pills nav-pills-custom flex-column border-transparent fs-5 fw-bold">
															<!--begin::Nav item-->
															<li class="nav-item mt-5">
																<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="{{ route('metronic.pages.social.feeds') }}">
																<i class="ki-duotone ki-row-horizontal fs-3 text-muted me-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>Feeds
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
																<!--end::Bullet--></a>
															</li>
															<!--end::Nav item-->
															<!--begin::Nav item-->
															<li class="nav-item mt-5">
																<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0 active" href="{{ route('metronic.pages.social.activity') }}">
																<i class="ki-duotone ki-chart-simple-2 fs-3 text-muted me-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																	<span class="path4"></span>
																</i>Activity
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
																<!--end::Bullet--></a>
															</li>
															<!--end::Nav item-->
															<!--begin::Nav item-->
															<li class="nav-item mt-5">
																<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="{{ route('metronic.pages.social.followers') }}">
																<i class="ki-duotone ki-profile-circle fs-3 text-muted me-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>Followers
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
																<!--end::Bullet--></a>
															</li>
															<!--end::Nav item-->
															<!--begin::Nav item-->
															<li class="nav-item mt-5">
																<a class="nav-link text-muted text-active-primary ms-0 py-0 me-10 ps-9 border-0" href="{{ route('metronic.pages.social.settings') }}">
																<i class="ki-duotone ki-setting-2 fs-3 text-muted me-3">
																	<span class="path1"></span>
																	<span class="path2"></span>
																</i>Settings
																<!--begin::Bullet-->
																<span class="bullet-custom position-absolute start-0 top-0 w-3px h-100 bg-primary rounded-end"></span>
																<!--end::Bullet--></a>
															</li>
															<!--end::Nav item-->
														</ul>
														<!--begin::Navs-->
													</div>
													<!--end::Navbar-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::User menu-->
											<!--begin::List widget 10-->
											<div class="card card-flush">
												<!--begin::Header-->
												<div class="card-header pt-7">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-800">Shipment History</span>
														<span class="text-gray-500 mt-1 fw-semibold fs-6">59 Active Shipments</span>
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-inverse" title="Logistics App is coming soon">View All</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Nav-->
													<ul class="nav nav-pills nav-pills-custom row position-relative mx-0 mb-9">
														<!--begin::Item-->
														<li class="nav-item col-4 mx-0 p-0">
															<!--begin::Link-->
															<a class="nav-link active d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_1">
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Notable</span>
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
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_2">
																<!--begin::Subtitle-->
																<span class="nav-text text-gray-800 fw-bold fs-6 mb-3">Delivered</span>
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
															<a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill" href="#kt_list_widget_10_tab_3">
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
													<div class="tab-content">
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_list_widget_10_tab_1">
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-ship text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
																		</div>
																		<span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Messina Harbor</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Hektor Container Hotel</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
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
															<div class="separator separator-dashed my-6"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-truck text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Truck Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
																		</div>
																		<span class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Haven van Rotterdam</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
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
															<div class="separator separator-dashed my-6"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-delivery text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Delivery Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
																		</div>
																		<span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Mina St - Zayed Port</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">27 Drydock Boston</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
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
															<div class="separator separator-dashed my-6"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-airplane-square text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Plane Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
																		</div>
																		<span class="badge badge-lg badge-light-danger fw-bold my-2 fs-8">Delayed</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">KLM Cargo</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Singapore Cargo</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
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
														<div class="tab-pane fade" id="kt_list_widget_10_tab_2">
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-airplane-square text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Plane Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
																		</div>
																		<span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">KLM Cargo</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Singapore Cargo</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
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
															<div class="separator separator-dashed my-6"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-truck text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Truck Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
																		</div>
																		<span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Haven van Rotterdam</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
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
															<div class="separator separator-dashed my-6"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-ship text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
																		</div>
																		<span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Mina St - Zayed Port</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">27 Drydock Boston</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
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
															<div class="separator separator-dashed my-6"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-ship text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
																		</div>
																		<span class="badge badge-lg badge-light-success fw-bold my-2 fs-8">Delivered</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Messina Harbor</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Hektor Container Hotel</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
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
														<div class="tab-pane fade" id="kt_list_widget_10_tab_3">
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-ship text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
																		</div>
																		<span class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Mina St - Zayed Port</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Abu Dhabi, UAE</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">27 Drydock Boston</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Boston, USA</span>
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
															<div class="separator separator-dashed my-6"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-airplane-square text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Plane Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
																		</div>
																		<span class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">KLM Cargo</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Schipol Airport, Amsterdam</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Singapore Cargo</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Changi Airport, Singapore</span>
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
															<div class="separator separator-dashed my-6"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-ship text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Ship Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#5635-342808</span>
																		</div>
																		<span class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Messina Harbor</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Sicily, Italy</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Hektor Container Hotel</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Tallin, EST</span>
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
															<div class="separator separator-dashed my-6"></div>
															<!--end::Separator-->
															<!--begin::Item-->
															<div class="m-0">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-sm-center mb-5">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-45px me-4">
																		<span class="symbol-label bg-primary">
																			<i class="ki-duotone ki-truck text-inverse-primary fs-1">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																				<span class="path4"></span>
																				<span class="path5"></span>
																			</i>
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Section-->
																	<div class="d-flex align-items-center flex-row-fluid flex-wrap">
																		<div class="flex-grow-1 me-2">
																			<a href="#" class="text-gray-500 fs-6 fw-semibold">Truck Freight</a>
																			<span class="text-gray-800 fw-bold d-block fs-4">#0066-954784</span>
																		</div>
																		<span class="badge badge-lg badge-light-primary fw-bold my-2 fs-8">Shipping</span>
																	</div>
																	<!--end::Section-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Timeline-->
																<div class="timeline">
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center mb-7">
																		<!--begin::Timeline line-->
																		<div class="timeline-line mt-1 mb-n6 mb-sm-n7"></div>
																		<!--end::Timeline line-->
																		<!--begin::Timeline icon-->
																		<div class="timeline-icon">
																			<i class="ki-duotone ki-cd fs-2 text-danger">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																		</div>
																		<!--end::Timeline icon-->
																		<!--begin::Timeline content-->
																		<div class="timeline-content m-0">
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Haven van Rotterdam</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Rotterdam, Netherlands</span>
																			<!--end::Title-->
																		</div>
																		<!--end::Timeline content-->
																	</div>
																	<!--end::Timeline item-->
																	<!--begin::Timeline item-->
																	<div class="timeline-item align-items-center">
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
																			<!--begin::Title-->
																			<span class="fs-6 text-gray-500 fw-semibold d-block">Forest-Midi</span>
																			<!--end::Title-->
																			<!--begin::Title-->
																			<span class="fs-6 fw-bold text-gray-800">Brussels, Belgium</span>
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
											<!--end::List widget 10-->
										</div>
										<!--end::Start sidebar-->
										<!--begin::Content-->
										<div class="w-100 flex-lg-row-fluid mx-lg-13">
											<!--begin::Mobile toolbar-->
											<div class="d-flex d-lg-none align-items-center justify-content-end mb-10">
												<div class="d-flex align-items-center gap-2">
													<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_start_sidebar_toggle">
														<i class="ki-duotone ki-profile-circle fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</div>
													<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_social_end_sidebar_toggle">
														<i class="ki-duotone ki-scroll fs-1">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</div>
												</div>
											</div>
											<!--end::Mobile toolbar-->
											<!--begin::Timeline-->
											<div class="card">
												<!--begin::Card head-->
												<div class="card-header card-header-stretch">
													<!--begin::Title-->
													<div class="card-title d-flex align-items-center">
														<i class="ki-duotone ki-calendar-8 fs-1 text-primary me-3 lh-0">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
														</i>
														<h3 class="fw-bold m-0 text-gray-800">Jan 23, 2026</h3>
													</div>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar m-0">
														<!--begin::Tab nav-->
														<ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
															<li class="nav-item" role="presentation">
																<a id="kt_activity_today_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_today">Today</a>
															</li>
															<li class="nav-item" role="presentation">
																<a id="kt_activity_week_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_week">Week</a>
															</li>
															<li class="nav-item" role="presentation">
																<a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_month">Month</a>
															</li>
															<li class="nav-item" role="presentation">
																<a id="kt_activity_year_tab" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_year">2026</a>
															</li>
														</ul>
														<!--end::Tab nav-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Card head-->
												<!--begin::Card body-->
												<div class="card-body">
													<!--begin::Tab Content-->
													<div class="tab-content">
														<!--begin::Tab panel-->
														<div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
															<!--begin::Timeline-->
															<div class="timeline timeline-border-dashed">
																<!--begin::Timeline item-->
																<div class="timeline-item">
																	<!--begin::Timeline line-->
																	<div class="timeline-line"></div>
																	<!--end::Timeline line-->
																	<!--begin::Timeline icon-->
																	<div class="timeline-icon">
																		<i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
																					<img src="assets/media/avatars/300-14.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																		<!--begin::Timeline details-->
																		<div class="overflow-auto pb-5">
																			<!--begin::Record-->
																			<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
																				<!--begin::Title-->
																				<a href="{{ route('metronic.apps.projects.project') }}" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
																				<!--end::Title-->
																				<!--begin::Label-->
																				<div class="min-w-175px pe-2">
																					<span class="badge badge-light text-muted">Application Design</span>
																				</div>
																				<!--end::Label-->
																				<!--begin::Users-->
																				<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
																					<!--begin::User-->
																					<div class="symbol symbol-circle symbol-25px">
																						<img src="assets/media/avatars/300-2.jpg" alt="img" />
																					</div>
																					<!--end::User-->
																					<!--begin::User-->
																					<div class="symbol symbol-circle symbol-25px">
																						<img src="assets/media/avatars/300-14.jpg" alt="img" />
																					</div>
																					<!--end::User-->
																					<!--begin::User-->
																					<div class="symbol symbol-circle symbol-25px">
																						<div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
																					</div>
																					<!--end::User-->
																				</div>
																				<!--end::Users-->
																				<!--begin::Progress-->
																				<div class="min-w-125px pe-2">
																					<span class="badge badge-light-primary">In Progress</span>
																				</div>
																				<!--end::Progress-->
																				<!--begin::Action-->
																				<a href="{{ route('metronic.apps.projects.project') }}" class="btn btn-sm btn-light btn-active-light-primary">View</a>
																				<!--end::Action-->
																			</div>
																			<!--end::Record-->
																			<!--begin::Record-->
																			<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
																				<!--begin::Title-->
																				<a href="{{ route('metronic.apps.projects.project') }}" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
																				<!--end::Title-->
																				<!--begin::Label-->
																				<div class="min-w-175px">
																					<span class="badge badge-light text-muted">CRM System Development</span>
																				</div>
																				<!--end::Label-->
																				<!--begin::Users-->
																				<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
																					<!--begin::User-->
																					<div class="symbol symbol-circle symbol-25px">
																						<img src="assets/media/avatars/300-20.jpg" alt="img" />
																					</div>
																					<!--end::User-->
																					<!--begin::User-->
																					<div class="symbol symbol-circle symbol-25px">
																						<div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
																					</div>
																					<!--end::User-->
																				</div>
																				<!--end::Users-->
																				<!--begin::Progress-->
																				<div class="min-w-125px">
																					<span class="badge badge-light-success">Completed</span>
																				</div>
																				<!--end::Progress-->
																				<!--begin::Action-->
																				<a href="{{ route('metronic.apps.projects.project') }}" class="btn btn-sm btn-light btn-active-light-primary">View</a>
																				<!--end::Action-->
																			</div>
																			<!--end::Record-->
																		</div>
																		<!--end::Timeline details-->
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
																	<div class="timeline-icon me-4">
																		<i class="ki-duotone ki-flag fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n2">
																		<!--begin::Timeline heading-->
																		<div class="overflow-auto pe-3">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
																					<img src="assets/media/avatars/300-1.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
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
																		<i class="ki-duotone ki-disconnect fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																			<span class="path5"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="mb-5 pe-3">
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
																					<img src="assets/media/avatars/300-23.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																		<!--begin::Timeline details-->
																		<div class="overflow-auto pb-5">
																			<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																					<!--begin::Icon-->
																					<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="{{ route('metronic.apps.projects.project') }}" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">1.9mb</div>
																						<!--end::Number-->
																					</div>
																					<!--begin::Info-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																					<!--begin::Icon-->
																					<img alt="/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">18kb</div>
																						<!--end::Number-->
																					</div>
																					<!--end::Info-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center">
																					<!--begin::Icon-->
																					<img alt="/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">20mb</div>
																						<!--end::Number-->
																					</div>
																					<!--end::Icon-->
																				</div>
																				<!--end::Item-->
																			</div>
																		</div>
																		<!--end::Timeline details-->
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
																		<i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">Task
																			<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
																			<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
																					<img src="assets/media/avatars/300-14.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
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
																		<i class="ki-duotone ki-pencil fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
																					<img src="assets/media/avatars/300-2.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																		<!--begin::Timeline details-->
																		<div class="overflow-auto pb-5">
																			<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
																				<!--begin::Item-->
																				<div class="overlay me-10">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="overlay me-10">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="overlay">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																			</div>
																		</div>
																		<!--end::Timeline details-->
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
																		<i class="ki-duotone ki-sms fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">New case
																			<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="overflow-auto pb-5">
																				<!--begin::Wrapper-->
																				<div class="d-flex align-items-center mt-1 fs-6">
																					<!--begin::Info-->
																					<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
																					<!--end::Info-->
																					<!--begin::User-->
																					<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
																					<!--end::User-->
																				</div>
																				<!--end::Wrapper-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
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
																		<i class="ki-duotone ki-pencil fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
																					<img src="assets/media/avatars/300-4.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																		<!--begin::Timeline details-->
																		<div class="overflow-auto pb-5">
																			<!--begin::Notice-->
																			<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
																				<!--begin::Icon-->
																				<i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																				</i>
																				<!--end::Icon-->
																				<!--begin::Wrapper-->
																				<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
																					<!--begin::Content-->
																					<div class="mb-3 mb-md-0 fw-semibold">
																						<h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
																						<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
																					</div>
																					<!--end::Content-->
																					<!--begin::Action-->
																					<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
																					<!--end::Action-->
																				</div>
																				<!--end::Wrapper-->
																			</div>
																			<!--end::Notice-->
																		</div>
																		<!--end::Timeline details-->
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
																		<i class="ki-duotone ki-basket fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">New order
																			<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																	</div>
																	<!--end::Timeline content-->
																</div>
																<!--end::Timeline item-->
															</div>
															<!--end::Timeline-->
														</div>
														<!--end::Tab panel-->
														<!--begin::Tab panel-->
														<div id="kt_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_week_tab">
															<!--begin::Timeline-->
															<div class="timeline timeline-border-dashed">
																<!--begin::Timeline item-->
																<div class="timeline-item">
																	<!--begin::Timeline line-->
																	<div class="timeline-line"></div>
																	<!--end::Timeline line-->
																	<!--begin::Timeline icon-->
																	<div class="timeline-icon me-4">
																		<i class="ki-duotone ki-flag fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n2">
																		<!--begin::Timeline heading-->
																		<div class="overflow-auto pe-3">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
																					<img src="assets/media/avatars/300-1.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
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
																		<i class="ki-duotone ki-disconnect fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																			<span class="path5"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="mb-5 pe-3">
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
																					<img src="assets/media/avatars/300-23.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																		<!--begin::Timeline details-->
																		<div class="overflow-auto pb-5">
																			<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																					<!--begin::Icon-->
																					<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="{{ route('metronic.apps.projects.project') }}" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">1.9mb</div>
																						<!--end::Number-->
																					</div>
																					<!--begin::Info-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																					<!--begin::Icon-->
																					<img alt="/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">18kb</div>
																						<!--end::Number-->
																					</div>
																					<!--end::Info-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center">
																					<!--begin::Icon-->
																					<img alt="/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">20mb</div>
																						<!--end::Number-->
																					</div>
																					<!--end::Icon-->
																				</div>
																				<!--end::Item-->
																			</div>
																		</div>
																		<!--end::Timeline details-->
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
																		<i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">Task
																			<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
																			<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
																					<img src="assets/media/avatars/300-14.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
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
																		<i class="ki-duotone ki-pencil fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
																					<img src="assets/media/avatars/300-2.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																		<!--begin::Timeline details-->
																		<div class="overflow-auto pb-5">
																			<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
																				<!--begin::Item-->
																				<div class="overlay me-10">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="overlay me-10">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="overlay">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																			</div>
																		</div>
																		<!--end::Timeline details-->
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
																		<i class="ki-duotone ki-sms fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">New case
																			<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="overflow-auto pb-5">
																				<!--begin::Wrapper-->
																				<div class="d-flex align-items-center mt-1 fs-6">
																					<!--begin::Info-->
																					<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
																					<!--end::Info-->
																					<!--begin::User-->
																					<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
																					<!--end::User-->
																				</div>
																				<!--end::Wrapper-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																	</div>
																	<!--end::Timeline content-->
																</div>
																<!--end::Timeline item-->
															</div>
															<!--end::Timeline-->
														</div>
														<!--end::Tab panel-->
														<!--begin::Tab panel-->
														<div id="kt_activity_month" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_month_tab">
															<!--begin::Timeline-->
															<div class="timeline timeline-border-dashed">
																<!--begin::Timeline item-->
																<div class="timeline-item">
																	<!--begin::Timeline line-->
																	<div class="timeline-line"></div>
																	<!--end::Timeline line-->
																	<!--begin::Timeline icon-->
																	<div class="timeline-icon">
																		<i class="ki-duotone ki-pencil fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
																					<img src="assets/media/avatars/300-2.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																		<!--begin::Timeline details-->
																		<div class="overflow-auto pb-5">
																			<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
																				<!--begin::Item-->
																				<div class="overlay me-10">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="overlay me-10">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="overlay">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																			</div>
																		</div>
																		<!--end::Timeline details-->
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
																		<i class="ki-duotone ki-sms fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">New case
																			<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="overflow-auto pb-5">
																				<!--begin::Wrapper-->
																				<div class="d-flex align-items-center mt-1 fs-6">
																					<!--begin::Info-->
																					<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
																					<!--end::Info-->
																					<!--begin::User-->
																					<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
																					<!--end::User-->
																				</div>
																				<!--end::Wrapper-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
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
																		<i class="ki-duotone ki-basket fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">New order
																			<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
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
																	<div class="timeline-icon me-4">
																		<i class="ki-duotone ki-flag fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n2">
																		<!--begin::Timeline heading-->
																		<div class="overflow-auto pe-3">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
																					<img src="assets/media/avatars/300-1.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
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
																		<i class="ki-duotone ki-disconnect fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																			<span class="path5"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="mb-5 pe-3">
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
																					<img src="assets/media/avatars/300-23.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																		<!--begin::Timeline details-->
																		<div class="overflow-auto pb-5">
																			<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																					<!--begin::Icon-->
																					<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="{{ route('metronic.apps.projects.project') }}" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">1.9mb</div>
																						<!--end::Number-->
																					</div>
																					<!--begin::Info-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																					<!--begin::Icon-->
																					<img alt="/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">18kb</div>
																						<!--end::Number-->
																					</div>
																					<!--end::Info-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center">
																					<!--begin::Icon-->
																					<img alt="/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">20mb</div>
																						<!--end::Number-->
																					</div>
																					<!--end::Icon-->
																				</div>
																				<!--end::Item-->
																			</div>
																		</div>
																		<!--end::Timeline details-->
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
																		<i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">Task
																			<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
																			<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
																					<img src="assets/media/avatars/300-14.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																	</div>
																	<!--end::Timeline content-->
																</div>
																<!--end::Timeline item-->
															</div>
															<!--end::Timeline-->
														</div>
														<!--end::Tab panel-->
														<!--begin::Tab panel-->
														<div id="kt_activity_year" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_year_tab">
															<!--begin::Timeline-->
															<div class="timeline timeline-border-dashed">
																<!--begin::Timeline item-->
																<div class="timeline-item">
																	<!--begin::Timeline line-->
																	<div class="timeline-line"></div>
																	<!--end::Timeline line-->
																	<!--begin::Timeline icon-->
																	<div class="timeline-icon">
																		<i class="ki-duotone ki-disconnect fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																			<span class="path5"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="mb-5 pe-3">
																			<!--begin::Title-->
																			<a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
																					<img src="assets/media/avatars/300-23.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																		<!--begin::Timeline details-->
																		<div class="overflow-auto pb-5">
																			<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																					<!--begin::Icon-->
																					<img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="{{ route('metronic.apps.projects.project') }}" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">1.9mb</div>
																						<!--end::Number-->
																					</div>
																					<!--begin::Info-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																					<!--begin::Icon-->
																					<img alt="/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/doc.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">18kb</div>
																						<!--end::Number-->
																					</div>
																					<!--end::Info-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="d-flex flex-aligns-center">
																					<!--begin::Icon-->
																					<img alt="/apps/projects/project.html" class="w-30px me-3" src="assets/media/svg/files/css.svg" />
																					<!--end::Icon-->
																					<!--begin::Info-->
																					<div class="ms-1 fw-semibold">
																						<!--begin::Desc-->
																						<a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
																						<!--end::Desc-->
																						<!--begin::Number-->
																						<div class="text-gray-500">20mb</div>
																						<!--end::Number-->
																					</div>
																					<!--end::Icon-->
																				</div>
																				<!--end::Item-->
																			</div>
																		</div>
																		<!--end::Timeline details-->
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
																		<i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">Task
																			<a href="#" class="text-primary fw-bold me-1">#45890</a>merged with
																			<a href="#" class="text-primary fw-bold me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
																					<img src="assets/media/avatars/300-14.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
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
																		<i class="ki-duotone ki-pencil fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
																					<img src="assets/media/avatars/300-2.jpg" alt="img" />
																				</div>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																		<!--begin::Timeline details-->
																		<div class="overflow-auto pb-5">
																			<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
																				<!--begin::Item-->
																				<div class="overlay me-10">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-29.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="overlay me-10">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-31.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="overlay">
																					<!--begin::Image-->
																					<div class="overlay-wrapper">
																						<img alt="img" class="rounded w-150px" src="assets/media/stock/600x400/img-40.jpg" />
																					</div>
																					<!--end::Image-->
																					<!--begin::Link-->
																					<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																						<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																					</div>
																					<!--end::Link-->
																				</div>
																				<!--end::Item-->
																			</div>
																		</div>
																		<!--end::Timeline details-->
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
																		<i class="ki-duotone ki-sms fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mb-10 mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">New case
																			<a href="#" class="text-primary fw-bold me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="overflow-auto pb-5">
																				<!--begin::Wrapper-->
																				<div class="d-flex align-items-center mt-1 fs-6">
																					<!--begin::Info-->
																					<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
																					<!--end::Info-->
																					<!--begin::User-->
																					<a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
																					<!--end::User-->
																				</div>
																				<!--end::Wrapper-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
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
																		<i class="ki-duotone ki-basket fs-2 text-gray-500">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																	</div>
																	<!--end::Timeline icon-->
																	<!--begin::Timeline content-->
																	<div class="timeline-content mt-n1">
																		<!--begin::Timeline heading-->
																		<div class="pe-3 mb-5">
																			<!--begin::Title-->
																			<div class="fs-5 fw-semibold mb-2">New order
																			<a href="#" class="text-primary fw-bold me-1">#67890</a>is placed for Workshow Planning & Budget Estimation</div>
																			<!--end::Title-->
																			<!--begin::Description-->
																			<div class="d-flex align-items-center mt-1 fs-6">
																				<!--begin::Info-->
																				<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
																				<!--end::Info-->
																				<!--begin::User-->
																				<a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
																				<!--end::User-->
																			</div>
																			<!--end::Description-->
																		</div>
																		<!--end::Timeline heading-->
																	</div>
																	<!--end::Timeline content-->
																</div>
																<!--end::Timeline item-->
															</div>
															<!--end::Timeline-->
														</div>
														<!--end::Tab panel-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Timeline-->
										</div>
										<!--end::Content-->
										<!--begin::End sidebar-->
										<div class="d-lg-flex flex-column flex-lg-row-auto w-lg-325px" data-kt-drawer="true" data-kt-drawer-name="end-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '250px': '300px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_social_end_sidebar_toggle">
											<!--begin::Social widget 1-->
											<div class="card mb-5 mb-xl-8">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Suggestions for you</span>
														<span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
													</h3>
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
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-5">
															<img src="assets/media/avatars/300-11.jpg" class="h-50 align-self-center" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<!--begin:Author-->
															<div class="flex-grow-1 me-2">
																<a href="{{ route('metronic.pages.user_profile.overview') }}" class="text-gray-800 text-hover-primary fs-6 fw-bold">Jacob Jones</a>
																<span class="text-muted fw-semibold d-block fs-7">Barone LLC.</span>
															</div>
															<!--end:Author-->
															<!--begin:Action-->
															<a href="{{ route('metronic.pages.user_profile.overview') }}" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
															<!--end:Action-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-4"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-5">
															<img src="assets/media/avatars/300-2.jpg" class="h-50 align-self-center" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<!--begin:Author-->
															<div class="flex-grow-1 me-2">
																<a href="{{ route('metronic.pages.user_profile.overview') }}" class="text-gray-800 text-hover-primary fs-6 fw-bold">Annette Black</a>
																<span class="text-muted fw-semibold d-block fs-7">Binford Ltd.</span>
															</div>
															<!--end:Author-->
															<!--begin:Action-->
															<a href="{{ route('metronic.pages.user_profile.overview') }}" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
															<!--end:Action-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-4"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-5">
															<img src="assets/media/avatars/300-7.jpg" class="h-50 align-self-center" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<!--begin:Author-->
															<div class="flex-grow-1 me-2">
																<a href="{{ route('metronic.pages.user_profile.overview') }}" class="text-gray-800 text-hover-primary fs-6 fw-bold">Devon Lane</a>
																<span class="text-muted fw-semibold d-block fs-7">Acme Co.</span>
															</div>
															<!--end:Author-->
															<!--begin:Action-->
															<a href="{{ route('metronic.pages.user_profile.overview') }}" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
															<!--end:Action-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-4"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-5">
															<img src="assets/media/avatars/300-9.jpg" class="h-50 align-self-center" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<!--begin:Author-->
															<div class="flex-grow-1 me-2">
																<a href="{{ route('metronic.pages.user_profile.overview') }}" class="text-gray-800 text-hover-primary fs-6 fw-bold">Kristin Watson</a>
																<span class="text-muted fw-semibold d-block fs-7">Biffco Enterprises Ltd.</span>
															</div>
															<!--end:Author-->
															<!--begin:Action-->
															<a href="{{ route('metronic.pages.user_profile.overview') }}" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
															<!--end:Action-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Separator-->
													<div class="separator separator-dashed my-4"></div>
													<!--end::Separator-->
													<!--begin::Item-->
													<div class="d-flex flex-stack">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-5">
															<img src="assets/media/avatars/300-12.jpg" class="h-50 align-self-center" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<!--begin:Author-->
															<div class="flex-grow-1 me-2">
																<a href="{{ route('metronic.pages.user_profile.overview') }}" class="text-gray-800 text-hover-primary fs-6 fw-bold">Eleanor Pena</a>
																<span class="text-muted fw-semibold d-block fs-7">Abstergo Ltd.</span>
															</div>
															<!--end:Author-->
															<!--begin:Action-->
															<a href="{{ route('metronic.pages.user_profile.overview') }}" class="btn btn-sm btn-light fs-8 fw-bold">Follow</a>
															<!--end:Action-->
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Social widget 1-->
											<!--begin::Social widget 2-->
											<div class="card card-flush mb-5 mb-xl-8">
												<!--begin::Header-->
												<div class="card-header pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-900">Trending Feeds</span>
														<span class="text-muted mt-1 fw-semibold fs-7">8k social visitors</span>
													</h3>
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<a href="{{ route('metronic.pages.social.activity') }}" class="btn btn-sm btn-light">View All</a>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body">
													<!--begin::Row-->
													<div class="row g-3 g-lg-6">
														<!--begin::Col-->
														<div class="col-md-6">
															<!--begin::Img-->
															<a href="">
																<img src="assets/media/stock/600x600/img-33.jpg" class="rounded w-100" alt="" />
															</a>
															<!--end::Img-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-md-6">
															<!--begin::Img-->
															<a href="">
																<img src="assets/media/stock/600x600/img-26.jpg" class="rounded w-100" alt="" />
															</a>
															<!--end::Img-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-md-6">
															<!--begin::Img-->
															<a href="">
																<img src="assets/media/stock/600x600/img-25.jpg" class="rounded w-100" alt="" />
															</a>
															<!--end::Img-->
														</div>
														<!--end::Col-->
														<!--begin::Col-->
														<div class="col-md-6">
															<!--begin::Img-->
															<a href="">
																<img src="assets/media/stock/600x600/img-35.jpg" class="rounded w-100" alt="" />
															</a>
															<!--end::Img-->
														</div>
														<!--end::Col-->
													</div>
													<!--end::Row-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Social widget 2-->
										</div>
										<!--end::End sidebar-->
									</div>
									<!--end::Social - Activity-->
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
		<!--begin::Custom Javascript(used for this page only)-->





		<!--end::Custom Javascript-->
		<!--end::Javascript-->
@endsection

@section('page_scripts')
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
@endsection
