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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Products</h1>
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
											<li class="breadcrumb-item text-muted">eCommerce</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-500 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Catalog</li>
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
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_69981c3d797d4">
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
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_69981c3d797d4" data-allow-clear="true">
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
									<!--begin::Products-->
									<div class="card card-flush">
										<!--begin::Card header-->
										<div class="card-header align-items-center py-5 gap-2 gap-md-5">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
												</div>
												<!--end::Search-->
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
												<div class="w-100 mw-150px">
													<!--begin::Select2-->
													<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
														<option></option>
														<option value="all">All</option>
														<option value="published">Published</option>
														<option value="scheduled">Scheduled</option>
														<option value="inactive">Inactive</option>
													</select>
													<!--end::Select2-->
												</div>
												<!--begin::Add product-->
												<a href="{{ route('metronic.apps.ecommerce.catalog.add_product') }}" class="btn btn-primary">Add Product</a>
												<!--end::Add product-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
												<thead>
													<tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
														<th class="w-10px pe-2">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
															</div>
														</th>
														<th class="min-w-200px">Product</th>
														<th class="text-end min-w-100px">SKU</th>
														<th class="text-end min-w-70px">Qty</th>
														<th class="text-end min-w-100px">Price</th>
														<th class="text-end min-w-100px">Rating</th>
														<th class="text-end min-w-100px">Status</th>
														<th class="text-end min-w-70px">Actions</th>
													</tr>
												</thead>
												<tbody class="fw-semibold text-gray-600">
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/1.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 1</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02675001</span>
														</td>
														<td class="text-end pe-0" data-order="18">
															<span class="fw-bold ms-3">18</span>
														</td>
														<td class="text-end pe-0">70</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/2.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03951009</span>
														</td>
														<td class="text-end pe-0" data-order="9">
															<span class="badge badge-light-warning">Low stock</span>
															<span class="fw-bold text-warning ms-3">9</span>
														</td>
														<td class="text-end pe-0">184</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/3.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03620009</span>
														</td>
														<td class="text-end pe-0" data-order="19">
															<span class="fw-bold ms-3">19</span>
														</td>
														<td class="text-end pe-0">139</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/4.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04515003</span>
														</td>
														<td class="text-end pe-0" data-order="6">
															<span class="badge badge-light-warning">Low stock</span>
															<span class="fw-bold text-warning ms-3">6</span>
														</td>
														<td class="text-end pe-0">48</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/5.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02841004</span>
														</td>
														<td class="text-end pe-0" data-order="19">
															<span class="fw-bold ms-3">19</span>
														</td>
														<td class="text-end pe-0">43</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/6.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03110008</span>
														</td>
														<td class="text-end pe-0" data-order="47">
															<span class="fw-bold ms-3">47</span>
														</td>
														<td class="text-end pe-0">295</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/7.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03522007</span>
														</td>
														<td class="text-end pe-0" data-order="17">
															<span class="fw-bold ms-3">17</span>
														</td>
														<td class="text-end pe-0">281</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/8.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01113003</span>
														</td>
														<td class="text-end pe-0" data-order="10">
															<span class="fw-bold ms-3">10</span>
														</td>
														<td class="text-end pe-0">51</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/9.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02874001</span>
														</td>
														<td class="text-end pe-0" data-order="18">
															<span class="fw-bold ms-3">18</span>
														</td>
														<td class="text-end pe-0">83</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/10.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02972009</span>
														</td>
														<td class="text-end pe-0" data-order="47">
															<span class="fw-bold ms-3">47</span>
														</td>
														<td class="text-end pe-0">115</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/11.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03446001</span>
														</td>
														<td class="text-end pe-0" data-order="17">
															<span class="fw-bold ms-3">17</span>
														</td>
														<td class="text-end pe-0">80</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/12.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01503006</span>
														</td>
														<td class="text-end pe-0" data-order="15">
															<span class="fw-bold ms-3">15</span>
														</td>
														<td class="text-end pe-0">169</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/13.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 13</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02959004</span>
														</td>
														<td class="text-end pe-0" data-order="40">
															<span class="fw-bold ms-3">40</span>
														</td>
														<td class="text-end pe-0">148</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/14.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 14</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03822007</span>
														</td>
														<td class="text-end pe-0" data-order="22">
															<span class="fw-bold ms-3">22</span>
														</td>
														<td class="text-end pe-0">99</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/15.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 15</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03847001</span>
														</td>
														<td class="text-end pe-0" data-order="35">
															<span class="fw-bold ms-3">35</span>
														</td>
														<td class="text-end pe-0">269</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/16.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 16</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02852002</span>
														</td>
														<td class="text-end pe-0" data-order="41">
															<span class="fw-bold ms-3">41</span>
														</td>
														<td class="text-end pe-0">262</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/17.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 17</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04453008</span>
														</td>
														<td class="text-end pe-0" data-order="5">
															<span class="badge badge-light-warning">Low stock</span>
															<span class="fw-bold text-warning ms-3">5</span>
														</td>
														<td class="text-end pe-0">71</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/18.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 18</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03741008</span>
														</td>
														<td class="text-end pe-0" data-order="48">
															<span class="fw-bold ms-3">48</span>
														</td>
														<td class="text-end pe-0">222</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/19.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 19</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01857002</span>
														</td>
														<td class="text-end pe-0" data-order="45">
															<span class="fw-bold ms-3">45</span>
														</td>
														<td class="text-end pe-0">71</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/20.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 20</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04684008</span>
														</td>
														<td class="text-end pe-0" data-order="43">
															<span class="fw-bold ms-3">43</span>
														</td>
														<td class="text-end pe-0">115</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/21.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 21</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02584006</span>
														</td>
														<td class="text-end pe-0" data-order="45">
															<span class="fw-bold ms-3">45</span>
														</td>
														<td class="text-end pe-0">18</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/22.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 22</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02380008</span>
														</td>
														<td class="text-end pe-0" data-order="45">
															<span class="fw-bold ms-3">45</span>
														</td>
														<td class="text-end pe-0">111</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/23.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 23</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01564003</span>
														</td>
														<td class="text-end pe-0" data-order="11">
															<span class="fw-bold ms-3">11</span>
														</td>
														<td class="text-end pe-0">252</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/24.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 24</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02212008</span>
														</td>
														<td class="text-end pe-0" data-order="16">
															<span class="fw-bold ms-3">16</span>
														</td>
														<td class="text-end pe-0">254</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/25.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 25</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04961003</span>
														</td>
														<td class="text-end pe-0" data-order="17">
															<span class="fw-bold ms-3">17</span>
														</td>
														<td class="text-end pe-0">280</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/26.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 26</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03264008</span>
														</td>
														<td class="text-end pe-0" data-order="42">
															<span class="fw-bold ms-3">42</span>
														</td>
														<td class="text-end pe-0">192</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/27.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 27</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03608006</span>
														</td>
														<td class="text-end pe-0" data-order="13">
															<span class="fw-bold ms-3">13</span>
														</td>
														<td class="text-end pe-0">90</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/28.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 28</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02915001</span>
														</td>
														<td class="text-end pe-0" data-order="42">
															<span class="fw-bold ms-3">42</span>
														</td>
														<td class="text-end pe-0">275</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/29.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 29</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04860005</span>
														</td>
														<td class="text-end pe-0" data-order="15">
															<span class="fw-bold ms-3">15</span>
														</td>
														<td class="text-end pe-0">284</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/30.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 30</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02528001</span>
														</td>
														<td class="text-end pe-0" data-order="40">
															<span class="fw-bold ms-3">40</span>
														</td>
														<td class="text-end pe-0">19</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/31.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 31</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01766009</span>
														</td>
														<td class="text-end pe-0" data-order="20">
															<span class="fw-bold ms-3">20</span>
														</td>
														<td class="text-end pe-0">282</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/32.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 32</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01797004</span>
														</td>
														<td class="text-end pe-0" data-order="35">
															<span class="fw-bold ms-3">35</span>
														</td>
														<td class="text-end pe-0">14</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/33.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 33</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01508005</span>
														</td>
														<td class="text-end pe-0" data-order="8">
															<span class="badge badge-light-warning">Low stock</span>
															<span class="fw-bold text-warning ms-3">8</span>
														</td>
														<td class="text-end pe-0">246</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/34.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 34</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02408007</span>
														</td>
														<td class="text-end pe-0" data-order="44">
															<span class="fw-bold ms-3">44</span>
														</td>
														<td class="text-end pe-0">60</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/35.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 35</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01987002</span>
														</td>
														<td class="text-end pe-0" data-order="38">
															<span class="fw-bold ms-3">38</span>
														</td>
														<td class="text-end pe-0">266</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/36.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 36</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01624002</span>
														</td>
														<td class="text-end pe-0" data-order="20">
															<span class="fw-bold ms-3">20</span>
														</td>
														<td class="text-end pe-0">148</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/37.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 37</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04737002</span>
														</td>
														<td class="text-end pe-0" data-order="20">
															<span class="fw-bold ms-3">20</span>
														</td>
														<td class="text-end pe-0">171</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/38.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 38</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02917002</span>
														</td>
														<td class="text-end pe-0" data-order="39">
															<span class="fw-bold ms-3">39</span>
														</td>
														<td class="text-end pe-0">57</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/39.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 39</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02674007</span>
														</td>
														<td class="text-end pe-0" data-order="28">
															<span class="fw-bold ms-3">28</span>
														</td>
														<td class="text-end pe-0">207</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/40.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 40</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03778003</span>
														</td>
														<td class="text-end pe-0" data-order="34">
															<span class="fw-bold ms-3">34</span>
														</td>
														<td class="text-end pe-0">75</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/41.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 41</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01912006</span>
														</td>
														<td class="text-end pe-0" data-order="24">
															<span class="fw-bold ms-3">24</span>
														</td>
														<td class="text-end pe-0">92</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/42.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 42</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04833005</span>
														</td>
														<td class="text-end pe-0" data-order="15">
															<span class="fw-bold ms-3">15</span>
														</td>
														<td class="text-end pe-0">147</td>
														<td class="text-end pe-0" data-order="rating-4">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/43.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 43</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03977001</span>
														</td>
														<td class="text-end pe-0" data-order="5">
															<span class="badge badge-light-warning">Low stock</span>
															<span class="fw-bold text-warning ms-3">5</span>
														</td>
														<td class="text-end pe-0">109</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/44.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 44</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">02877003</span>
														</td>
														<td class="text-end pe-0" data-order="47">
															<span class="fw-bold ms-3">47</span>
														</td>
														<td class="text-end pe-0">153</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Inactive">
															<!--begin::Badges-->
															<div class="badge badge-light-danger">Inactive</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/45.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 45</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03722009</span>
														</td>
														<td class="text-end pe-0" data-order="47">
															<span class="fw-bold ms-3">47</span>
														</td>
														<td class="text-end pe-0">194</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/46.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 46</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03560004</span>
														</td>
														<td class="text-end pe-0" data-order="14">
															<span class="fw-bold ms-3">14</span>
														</td>
														<td class="text-end pe-0">103</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/47.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 47</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03535005</span>
														</td>
														<td class="text-end pe-0" data-order="24">
															<span class="fw-bold ms-3">24</span>
														</td>
														<td class="text-end pe-0">13</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/48.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 48</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">04707005</span>
														</td>
														<td class="text-end pe-0" data-order="43">
															<span class="fw-bold ms-3">43</span>
														</td>
														<td class="text-end pe-0">197</td>
														<td class="text-end pe-0" data-order="rating-5">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/49.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 49</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">01574008</span>
														</td>
														<td class="text-end pe-0" data-order="15">
															<span class="fw-bold ms-3">15</span>
														</td>
														<td class="text-end pe-0">179</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Published">
															<!--begin::Badges-->
															<div class="badge badge-light-success">Published</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
															</div>
														</td>
														<td>
															<div class="d-flex align-items-center">
																<!--begin::Thumbnail-->
																<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="symbol symbol-50px">
																	<span class="symbol-label" style="background-image:url(/assets/media//stock/ecommerce/50.png);"></span>
																</a>
																<!--end::Thumbnail-->
																<div class="ms-5">
																	<!--begin::Title-->
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 50</a>
																	<!--end::Title-->
																</div>
															</div>
														</td>
														<td class="text-end pe-0">
															<span class="fw-bold">03680003</span>
														</td>
														<td class="text-end pe-0" data-order="25">
															<span class="fw-bold ms-3">25</span>
														</td>
														<td class="text-end pe-0">108</td>
														<td class="text-end pe-0" data-order="rating-3">
															<div class="rating justify-content-end">
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label checked">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
																<div class="rating-label">
																	<i class="ki-duotone ki-star fs-6"></i>
																</div>
															</div>
														</td>
														<td class="text-end pe-0" data-order="Scheduled">
															<!--begin::Badges-->
															<div class="badge badge-light-primary">Scheduled</div>
															<!--end::Badges-->
														</td>
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="{{ route('metronic.apps.ecommerce.catalog.edit_product') }}" class="menu-link px-3">Edit</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
													</tr>
												</tbody>
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Products-->
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
<script src="assets/js/custom/apps/ecommerce/catalog/products.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
@endsection
