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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Product Form</h1>
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
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_69981c25d5e78">
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
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_69981c25d5e78" data-allow-clear="true">
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
									<form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="/apps/ecommerce/catalog/products.html">
										<!--begin::Aside column-->
										<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
											<!--begin::Thumbnail settings-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Thumbnail</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body text-center pt-0">
													<!--begin::Image input-->
													<!--begin::Image input placeholder-->
													<style>.image-input-placeholder { background-image: url('/assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('/assets/media/svg/files/blank-image-dark.svg'); }</style>
													<!--end::Image input placeholder-->
													<div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
														<!--begin::Preview existing avatar-->
														<div class="image-input-wrapper w-150px h-150px"></div>
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
													<!--begin::Description-->
													<div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Thumbnail settings-->
											<!--begin::Status-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Status</h2>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
													</div>
													<!--begin::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Select2-->
													<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
														<option></option>
														<option value="published" selected="selected">Published</option>
														<option value="draft">Draft</option>
														<option value="scheduled">Scheduled</option>
														<option value="inactive">Inactive</option>
													</select>
													<!--end::Select2-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Set the product status.</div>
													<!--end::Description-->
													<!--begin::Datepicker-->
													<div class="d-none mt-10">
														<label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
														<input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date & time" />
													</div>
													<!--end::Datepicker-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Status-->
											<!--begin::Category & tags-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Product Details</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Input group-->
													<!--begin::Label-->
													<label class="form-label">Categories</label>
													<!--end::Label-->
													<!--begin::Select2-->
													<select class="form-select mb-2" data-control="select2" data-placeholder="Select an option" data-allow-clear="true" multiple="multiple">
														<option></option>
														<option value="Computers">Computers</option>
														<option value="Watches">Watches</option>
														<option value="Headphones">Headphones</option>
														<option value="Footwear">Footwear</option>
														<option value="Cameras">Cameras</option>
														<option value="Shirts">Shirts</option>
														<option value="Household">Household</option>
														<option value="Handbags">Handbags</option>
														<option value="Wines">Wines</option>
														<option value="Sandals">Sandals</option>
													</select>
													<!--end::Select2-->
													<!--begin::Description-->
													<div class="text-muted fs-7 mb-7">Add product to a category.</div>
													<!--end::Description-->
													<!--end::Input group-->
													<!--begin::Button-->
													<a href="{{ route('metronic.apps.ecommerce.catalog.add_category') }}" class="btn btn-light-primary btn-sm mb-10">
													<i class="ki-duotone ki-plus fs-2"></i>Create new category</a>
													<!--end::Button-->
													<!--begin::Input group-->
													<!--begin::Label-->
													<label class="form-label d-block">Tags</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input id="kt_ecommerce_add_product_tags" name="kt_ecommerce_add_product_tags" class="form-control mb-2" value="" />
													<!--end::Input-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Add tags to a product.</div>
													<!--end::Description-->
													<!--end::Input group-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Category & tags-->
											<!--begin::Weekly sales-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Weekly Sales</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<span class="text-muted">No data available. Sales data will begin capturing once product has been published.</span>
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Weekly sales-->
											<!--begin::Template settings-->
											<div class="card card-flush py-4">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Product Template</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0">
													<!--begin::Select store template-->
													<label for="kt_ecommerce_add_product_store_template" class="form-label">Select a product template</label>
													<!--end::Select store template-->
													<!--begin::Select2-->
													<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_store_template">
														<option></option>
														<option value="default" selected="selected">Default template</option>
														<option value="electronics">Electronics</option>
														<option value="office">Office stationary</option>
														<option value="fashion">Fashion</option>
													</select>
													<!--end::Select2-->
													<!--begin::Description-->
													<div class="text-muted fs-7">Assign a template from your current theme to define how a single product is displayed.</div>
													<!--end::Description-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Template settings-->
										</div>
										<!--end::Aside column-->
										<!--begin::Main column-->
										<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
											<!--begin:::Tabs-->
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">General</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Advanced</a>
												</li>
												<!--end:::Tab item-->
											</ul>
											<!--end:::Tabs-->
											<!--begin::Tab content-->
											<div class="tab-content">
												<!--begin::Tab pane-->
												<div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
													<div class="d-flex flex-column gap-7 gap-lg-10">
														<!--begin::General options-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>General</h2>
																</div>
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="mb-10 fv-row">
																	<!--begin::Label-->
																	<label class="required form-label">Product Name</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="" />
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div>
																	<!--begin::Label-->
																	<label class="form-label">Description</label>
																	<!--end::Label-->
																	<!--begin::Editor-->
																	<div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2"></div>
																	<!--end::Editor-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Set a description to the product for better visibility.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Card header-->
														</div>
														<!--end::General options-->
														<!--begin::Media-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>Media</h2>
																</div>
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="fv-row mb-2">
																	<!--begin::Dropzone-->
																	<div class="dropzone" id="kt_ecommerce_add_product_media">
																		<!--begin::Message-->
																		<div class="dz-message needsclick">
																			<!--begin::Icon-->
																			<i class="ki-duotone ki-file-up text-primary fs-3x">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																			<!--end::Icon-->
																			<!--begin::Info-->
																			<div class="ms-4">
																				<h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
																				<span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
																			</div>
																			<!--end::Info-->
																		</div>
																	</div>
																	<!--end::Dropzone-->
																</div>
																<!--end::Input group-->
																<!--begin::Description-->
																<div class="text-muted fs-7">Set the product media gallery.</div>
																<!--end::Description-->
															</div>
															<!--end::Card header-->
														</div>
														<!--end::Media-->
														<!--begin::Pricing-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>Pricing</h2>
																</div>
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="mb-10 fv-row">
																	<!--begin::Label-->
																	<label class="required form-label">Base Price</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="price" class="form-control mb-2" placeholder="Product price" value="" />
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Set the product price.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row mb-10">
																	<!--begin::Label-->
																	<label class="fs-6 fw-semibold mb-2">Discount Type
																	<span class="ms-1" data-bs-toggle="tooltip" title="Select a discount type that will be applied to this product">
																		<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span></label>
																	<!--End::Label-->
																	<!--begin::Row-->
																	<div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
																		<!--begin::Col-->
																		<div class="col">
																			<!--begin::Option-->
																			<label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
																				<!--begin::Radio-->
																				<span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="discount_option" value="1" checked="checked" />
																				</span>
																				<!--end::Radio-->
																				<!--begin::Info-->
																				<span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">No Discount</span>
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
																					<input class="form-check-input" type="radio" name="discount_option" value="2" />
																				</span>
																				<!--end::Radio-->
																				<!--begin::Info-->
																				<span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">Percentage %</span>
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
																					<input class="form-check-input" type="radio" name="discount_option" value="3" />
																				</span>
																				<!--end::Radio-->
																				<!--begin::Info-->
																				<span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">Fixed Price</span>
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
																<div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
																	<!--begin::Label-->
																	<label class="form-label">Set Discount Percentage</label>
																	<!--end::Label-->
																	<!--begin::Slider-->
																	<div class="d-flex flex-column text-center mb-5">
																		<div class="d-flex align-items-start justify-content-center mb-7">
																			<span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
																			<span class="fw-bold fs-4 mt-1 ms-2">%</span>
																		</div>
																		<div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
																	</div>
																	<!--end::Slider-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Set a percentage discount to be applied on this product.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
																	<!--begin::Label-->
																	<label class="form-label">Fixed Discounted Price</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="dicsounted_price" class="form-control mb-2" placeholder="Discounted price" />
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Set the discounted product price. The product will be reduced at the determined fixed price</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
																<!--begin::Tax-->
																<div class="d-flex flex-wrap gap-5">
																	<!--begin::Input group-->
																	<div class="fv-row w-100 flex-md-root">
																		<!--begin::Label-->
																		<label class="required form-label">Tax Class</label>
																		<!--end::Label-->
																		<!--begin::Select2-->
																		<select class="form-select mb-2" name="tax" data-control="select2" data-hide-search="true" data-placeholder="Select an option">
																			<option></option>
																			<option value="0">Tax Free</option>
																			<option value="1">Taxable Goods</option>
																			<option value="2">Downloadable Product</option>
																		</select>
																		<!--end::Select2-->
																		<!--begin::Description-->
																		<div class="text-muted fs-7">Set the product tax class.</div>
																		<!--end::Description-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="fv-row w-100 flex-md-root">
																		<!--begin::Label-->
																		<label class="form-label">VAT Amount (%)</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<input type="text" class="form-control mb-2" value="" />
																		<!--end::Input-->
																		<!--begin::Description-->
																		<div class="text-muted fs-7">Set the product VAT about.</div>
																		<!--end::Description-->
																	</div>
																	<!--end::Input group-->
																</div>
																<!--end:Tax-->
															</div>
															<!--end::Card header-->
														</div>
														<!--end::Pricing-->
													</div>
												</div>
												<!--end::Tab pane-->
												<!--begin::Tab pane-->
												<div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
													<div class="d-flex flex-column gap-7 gap-lg-10">
														<!--begin::Inventory-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>Inventory</h2>
																</div>
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="mb-10 fv-row">
																	<!--begin::Label-->
																	<label class="required form-label">SKU</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="sku" class="form-control mb-2" placeholder="SKU Number" value="" />
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Enter the product SKU.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10 fv-row">
																	<!--begin::Label-->
																	<label class="required form-label">Barcode</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" name="barcode" class="form-control mb-2" placeholder="Barcode Number" value="" />
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Enter the product barcode number.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10 fv-row">
																	<!--begin::Label-->
																	<label class="required form-label">Quantity</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div class="d-flex gap-3">
																		<input type="number" name="shelf" class="form-control mb-2" placeholder="On shelf" value="" />
																		<input type="number" name="warehouse" class="form-control mb-2" placeholder="In warehouse" />
																	</div>
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Enter the product quantity.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="fv-row">
																	<!--begin::Label-->
																	<label class="form-label">Allow Backorders</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<div class="form-check form-check-custom form-check-solid mb-2">
																		<input class="form-check-input" type="checkbox" value="" />
																		<label class="form-check-label">Yes</label>
																	</div>
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Allow customers to purchase products that are out of stock.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Card header-->
														</div>
														<!--end::Inventory-->
														<!--begin::Variations-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>Variations</h2>
																</div>
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="" data-kt-ecommerce-catalog-add-product="auto-options">
																	<!--begin::Label-->
																	<label class="form-label">Add Product Variations</label>
																	<!--end::Label-->
																	<!--begin::Repeater-->
																	<div id="kt_ecommerce_add_product_options">
																		<!--begin::Form group-->
																		<div class="form-group">
																			<div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
																				<div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
																					<!--begin::Select2-->
																					<div class="w-100 w-md-200px">
																						<select class="form-select" name="product_option" data-placeholder="Select a variation" data-kt-ecommerce-catalog-add-product="product_option">
																							<option></option>
																							<option value="color">Color</option>
																							<option value="size">Size</option>
																							<option value="material">Material</option>
																							<option value="style">Style</option>
																						</select>
																					</div>
																					<!--end::Select2-->
																					<!--begin::Input-->
																					<input type="text" class="form-control mw-100 w-200px" name="product_option_value" placeholder="Variation" />
																					<!--end::Input-->
																					<button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
																						<i class="ki-duotone ki-cross fs-1">
																							<span class="path1"></span>
																							<span class="path2"></span>
																						</i>
																					</button>
																				</div>
																			</div>
																		</div>
																		<!--end::Form group-->
																		<!--begin::Form group-->
																		<div class="form-group mt-5">
																			<button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
																			<i class="ki-duotone ki-plus fs-2"></i>Add another variation</button>
																		</div>
																		<!--end::Form group-->
																	</div>
																	<!--end::Repeater-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Card header-->
														</div>
														<!--end::Variations-->
														<!--begin::Shipping-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>Shipping</h2>
																</div>
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="fv-row">
																	<!--begin::Input-->
																	<div class="form-check form-check-custom form-check-solid mb-2">
																		<input class="form-check-input" type="checkbox" id="kt_ecommerce_add_product_shipping_checkbox" value="1" />
																		<label class="form-check-label">This is a physical product</label>
																	</div>
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Set if the product is a physical or digital item. Physical products may require shipping.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
																<!--begin::Shipping form-->
																<div id="kt_ecommerce_add_product_shipping" class="d-none mt-10">
																	<!--begin::Input group-->
																	<div class="mb-10 fv-row">
																		<!--begin::Label-->
																		<label class="form-label">Weight</label>
																		<!--end::Label-->
																		<!--begin::Editor-->
																		<input type="text" name="weight" class="form-control mb-2" placeholder="Product weight" value="" />
																		<!--end::Editor-->
																		<!--begin::Description-->
																		<div class="text-muted fs-7">Set a product weight in kilograms (kg).</div>
																		<!--end::Description-->
																	</div>
																	<!--end::Input group-->
																	<!--begin::Input group-->
																	<div class="fv-row">
																		<!--begin::Label-->
																		<label class="form-label">Dimension</label>
																		<!--end::Label-->
																		<!--begin::Input-->
																		<div class="d-flex flex-wrap flex-sm-nowrap gap-3">
																			<input type="number" name="width" class="form-control mb-2" placeholder="Width (w)" value="" />
																			<input type="number" name="height" class="form-control mb-2" placeholder="Height (h)" value="" />
																			<input type="number" name="length" class="form-control mb-2" placeholder="Lengtn (l)" value="" />
																		</div>
																		<!--end::Input-->
																		<!--begin::Description-->
																		<div class="text-muted fs-7">Enter the product dimensions in centimeters (cm).</div>
																		<!--end::Description-->
																	</div>
																	<!--end::Input group-->
																</div>
																<!--end::Shipping form-->
															</div>
															<!--end::Card header-->
														</div>
														<!--end::Shipping-->
														<!--begin::Meta options-->
														<div class="card card-flush py-4">
															<!--begin::Card header-->
															<div class="card-header">
																<div class="card-title">
																	<h2>Meta Options</h2>
																</div>
															</div>
															<!--end::Card header-->
															<!--begin::Card body-->
															<div class="card-body pt-0">
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label">Meta Tag Title</label>
																	<!--end::Label-->
																	<!--begin::Input-->
																	<input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name" />
																	<!--end::Input-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div class="mb-10">
																	<!--begin::Label-->
																	<label class="form-label">Meta Tag Description</label>
																	<!--end::Label-->
																	<!--begin::Editor-->
																	<div id="kt_ecommerce_add_product_meta_description" name="kt_ecommerce_add_product_meta_description" class="min-h-100px mb-2"></div>
																	<!--end::Editor-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Set a meta tag description to the product for increased SEO ranking.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
																<!--begin::Input group-->
																<div>
																	<!--begin::Label-->
																	<label class="form-label">Meta Tag Keywords</label>
																	<!--end::Label-->
																	<!--begin::Editor-->
																	<input id="kt_ecommerce_add_product_meta_keywords" name="kt_ecommerce_add_product_meta_keywords" class="form-control mb-2" />
																	<!--end::Editor-->
																	<!--begin::Description-->
																	<div class="text-muted fs-7">Set a list of keywords that the product is related to. Separate the keywords by adding a comma
																	<code>,</code>between each keyword.</div>
																	<!--end::Description-->
																</div>
																<!--end::Input group-->
															</div>
															<!--end::Card header-->
														</div>
														<!--end::Meta options-->
													</div>
												</div>
												<!--end::Tab pane-->
											</div>
											<!--end::Tab content-->
											<div class="d-flex justify-content-end">
												<!--begin::Button-->
												<a href="{{ route('metronic.apps.ecommerce.catalog.products') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
													<span class="indicator-label">Save Changes</span>
													<span class="indicator-progress">Please wait...
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
										</div>
										<!--end::Main column-->
									</form>
									<!--end::Form-->
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
<script src="assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
<script src="assets/js/custom/apps/ecommerce/catalog/save-product.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
@endsection
