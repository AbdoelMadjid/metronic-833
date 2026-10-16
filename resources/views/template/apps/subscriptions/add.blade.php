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
										<h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">Subscription Details</h1>
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
											<li class="breadcrumb-item text-muted">Subscription</li>
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
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_69981c2318eae">
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
															<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_69981c2318eae" data-allow-clear="true">
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
									<!--begin::Layout-->
									<div class="d-flex flex-column flex-lg-row">
										<!--begin::Content-->
										<div class="flex-lg-row-fluid me-lg-15 order-2 order-lg-1 mb-10 mb-lg-0">
											<!--begin::Form-->
											<form class="form" action="#" id="kt_subscriptions_create_new">
												<!--begin::Customer-->
												<div class="card card-flush pt-3 mb-5 mb-lg-10">
													<!--begin::Card header-->
													<div class="card-header">
														<!--begin::Card title-->
														<div class="card-title">
															<h2 class="fw-bold">Customer</h2>
														</div>
														<!--begin::Card title-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Description-->
														<div class="text-gray-500 fw-semibold fs-5 mb-5">Select or add a customer to a subscription:</div>
														<!--end::Description-->
														<!--begin::Selected customer-->
														<div class="d-flex align-items-center p-3 mb-2">
															<!--begin::Avatar-->
															<div class="symbol symbol-60px symbol-circle me-3">
																<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
															</div>
															<!--end::Avatar-->
															<!--begin::Info-->
															<div class="d-flex flex-column">
																<!--begin::Name-->
																<a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-2">Sean Bean</a>
																<!--end::Name-->
																<!--begin::Email-->
																<a href="#" class="fw-semibold text-gray-600 text-hover-primary">sean@dellito.com</a>
																<!--end::Email-->
															</div>
															<!--end::Info-->
														</div>
														<!--end::Selected customer-->
														<!--begin::Customer add buttons-->
														<div class="mb-7 d-none">
															<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_customer_search">Select Customer</a>
															<span class="fw-bold text-gray-500 mx-2">or</span>
															<a href="{{ route('metronic.apps.customers.list') }}" class="btn btn-light-primary">Add New Customer</a>
														</div>
														<!--end::Customer add buttons-->
														<!--begin::Customer change button-->
														<div class="mb-10">
															<a href="#" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_customer_search">Change Customer</a>
														</div>
														<!--end::Customer change button-->
														<!--begin::Notice-->
														<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed rounded-3 p-6">
															<!--begin::Wrapper-->
															<div class="d-flex flex-stack flex-grow-1">
																<!--begin::Content-->
																<div class="fw-semibold">
																	<h4 class="text-gray-900 fw-bold">This is a very important privacy notice!</h4>
																	<div class="fs-6 text-gray-700">Writing headlines for blog posts is much science and probably cool audience.
																	<a href="#" class="fw-bold">Learn more</a>.</div>
																</div>
																<!--end::Content-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Notice-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Customer-->
												<!--begin::Pricing-->
												<div class="card card-flush pt-3 mb-5 mb-lg-10">
													<!--begin::Card header-->
													<div class="card-header">
														<!--begin::Card title-->
														<div class="card-title">
															<h2 class="fw-bold">Products</h2>
														</div>
														<!--begin::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_product">Add Product</button>
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Table wrapper-->
														<div class="table-responsive">
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed fs-6 fw-semibold gy-4" id="kt_subscription_products_table">
																<thead>
																	<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																		<th class="min-w-300px">Product</th>
																		<th class="min-w-100px">Qty</th>
																		<th class="min-w-150px">Total</th>
																		<th class="min-w-70px text-end">Remove</th>
																	</tr>
																</thead>
																<tbody class="text-gray-600">
																	<tr>
																		<td>Beginner Plan</td>
																		<td>1</td>
																		<td>149.99 / Month</td>
																		<td class="text-end">
																			<!--begin::Delete-->
																			<a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-action="product_remove">
																				<i class="ki-duotone ki-trash fs-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																					<span class="path5"></span>
																				</i>
																			</a>
																			<!--end::Delete-->
																		</td>
																	</tr>
																	<tr>
																		<td>Pro Plan</td>
																		<td>1</td>
																		<td>499.99 / Month</td>
																		<td class="text-end">
																			<!--begin::Delete-->
																			<a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-action="product_remove">
																				<i class="ki-duotone ki-trash fs-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																					<span class="path5"></span>
																				</i>
																			</a>
																			<!--end::Delete-->
																		</td>
																	</tr>
																	<tr>
																		<td>Team Plan</td>
																		<td>1</td>
																		<td>999.99 / Month</td>
																		<td class="text-end">
																			<!--begin::Delete-->
																			<a href="#" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="tooltip" title="Delete" data-kt-action="product_remove">
																				<i class="ki-duotone ki-trash fs-3">
																					<span class="path1"></span>
																					<span class="path2"></span>
																					<span class="path3"></span>
																					<span class="path4"></span>
																					<span class="path5"></span>
																				</i>
																			</a>
																			<!--end::Delete-->
																		</td>
																	</tr>
																</tbody>
															</table>
															<!--end::Table-->
														</div>
														<!--end::Table wrapper-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Pricing-->
												<!--begin::Payment method-->
												<div class="card card-flush pt-3 mb-5 mb-lg-10" data-kt-subscriptions-form="pricing">
													<!--begin::Card header-->
													<div class="card-header">
														<!--begin::Card title-->
														<div class="card-title">
															<h2 class="fw-bold">Payment Method</h2>
														</div>
														<!--begin::Card title-->
														<!--begin::Card toolbar-->
														<div class="card-toolbar">
															<a href="#" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">New Method</a>
														</div>
														<!--end::Card toolbar-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Options-->
														<div id="kt_create_new_payment_method">
															<!--begin::Option-->
															<div class="py-1">
																<!--begin::Header-->
																<div class="py-3 d-flex flex-stack flex-wrap">
																	<!--begin::Toggle-->
																	<div class="d-flex align-items-center collapsible toggle" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_1">
																		<!--begin::Arrow-->
																		<div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
																			<i class="ki-duotone ki-minus-square toggle-on text-primary fs-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																			<i class="ki-duotone ki-plus-square toggle-off fs-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</div>
																		<!--end::Arrow-->
																		<!--begin::Logo-->
																		<img src="assets/media/svg/card-logos/mastercard.svg" class="w-40px me-3" alt="" />
																		<!--end::Logo-->
																		<!--begin::Summary-->
																		<div class="me-3">
																			<div class="d-flex align-items-center fw-bold">Mastercard
																			<div class="badge badge-light-primary ms-5">Primary</div></div>
																			<div class="text-muted">Expires Dec 2024</div>
																		</div>
																		<!--end::Summary-->
																	</div>
																	<!--end::Toggle-->
																	<!--begin::Input-->
																	<div class="d-flex my-3 ms-9">
																		<!--begin::Radio-->
																		<label class="form-check form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="radio" name="payment_method" checked="checked" />
																		</label>
																		<!--end::Radio-->
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Header-->
																<!--begin::Body-->
																<div id="kt_create_new_payment_method_1" class="collapse show fs-6 ps-10">
																	<!--begin::Details-->
																	<div class="d-flex flex-wrap py-5">
																		<!--begin::Col-->
																		<div class="flex-equal me-5">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Name</td>
																					<td class="text-gray-800">Emma Smith</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Number</td>
																					<td class="text-gray-800">**** 9344</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Expires</td>
																					<td class="text-gray-800">12/2024</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Type</td>
																					<td class="text-gray-800">Mastercard credit card</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Issuer</td>
																					<td class="text-gray-800">VICBANK</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">ID</td>
																					<td class="text-gray-800">id_4325df90sdf8</td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="flex-equal">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Billing address</td>
																					<td class="text-gray-800">AU</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Phone</td>
																					<td class="text-gray-800">No phone provided</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Email</td>
																					<td class="text-gray-800">
																						<a href="#" class="text-gray-900 text-hover-primary">smith@kpmg.com</a>
																					</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Origin</td>
																					<td class="text-gray-800">Australia
																					<div class="symbol symbol-20px symbol-circle ms-2">
																						<img src="assets/media/flags/australia.svg" />
																					</div></td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">CVC check</td>
																					<td class="text-gray-800">Passed
																					<i class="ki-duotone ki-check-circle fs-2 text-success">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i></td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Option-->
															<div class="separator separator-dashed"></div>
															<!--begin::Option-->
															<div class="py-1">
																<!--begin::Header-->
																<div class="py-3 d-flex flex-stack flex-wrap">
																	<!--begin::Toggle-->
																	<div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_2">
																		<!--begin::Arrow-->
																		<div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
																			<i class="ki-duotone ki-minus-square toggle-on text-primary fs-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																			<i class="ki-duotone ki-plus-square toggle-off fs-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</div>
																		<!--end::Arrow-->
																		<!--begin::Logo-->
																		<img src="assets/media/svg/card-logos/visa.svg" class="w-40px me-3" alt="" />
																		<!--end::Logo-->
																		<!--begin::Summary-->
																		<div class="me-3">
																			<div class="d-flex align-items-center fw-bold">Visa</div>
																			<div class="text-muted">Expires Feb 2022</div>
																		</div>
																		<!--end::Summary-->
																	</div>
																	<!--end::Toggle-->
																	<!--begin::Input-->
																	<div class="d-flex my-3 ms-9">
																		<!--begin::Radio-->
																		<label class="form-check form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="radio" name="payment_method" />
																		</label>
																		<!--end::Radio-->
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Header-->
																<!--begin::Body-->
																<div id="kt_create_new_payment_method_2" class="collapse fs-6 ps-10">
																	<!--begin::Details-->
																	<div class="d-flex flex-wrap py-5">
																		<!--begin::Col-->
																		<div class="flex-equal me-5">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Name</td>
																					<td class="text-gray-800">Melody Macy</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Number</td>
																					<td class="text-gray-800">**** 4542</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Expires</td>
																					<td class="text-gray-800">02/2022</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Type</td>
																					<td class="text-gray-800">Visa credit card</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Issuer</td>
																					<td class="text-gray-800">ENBANK</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">ID</td>
																					<td class="text-gray-800">id_w2r84jdy723</td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="flex-equal">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Billing address</td>
																					<td class="text-gray-800">UK</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Phone</td>
																					<td class="text-gray-800">No phone provided</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Email</td>
																					<td class="text-gray-800">
																						<a href="#" class="text-gray-900 text-hover-primary">melody@altbox.com</a>
																					</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Origin</td>
																					<td class="text-gray-800">United Kingdom
																					<div class="symbol symbol-20px symbol-circle ms-2">
																						<img src="assets/media/flags/united-kingdom.svg" />
																					</div></td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">CVC check</td>
																					<td class="text-gray-800">Passed
																					<i class="ki-duotone ki-check fs-2 text-success"></i></td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Option-->
															<div class="separator separator-dashed"></div>
															<!--begin::Option-->
															<div class="py-1">
																<!--begin::Header-->
																<div class="py-3 d-flex flex-stack flex-wrap">
																	<!--begin::Toggle-->
																	<div class="d-flex align-items-center collapsible toggle collapsed" data-bs-toggle="collapse" data-bs-target="#kt_create_new_payment_method_3">
																		<!--begin::Arrow-->
																		<div class="btn btn-sm btn-icon btn-active-color-primary ms-n3 me-2">
																			<i class="ki-duotone ki-minus-square toggle-on text-primary fs-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																			</i>
																			<i class="ki-duotone ki-plus-square toggle-off fs-2">
																				<span class="path1"></span>
																				<span class="path2"></span>
																				<span class="path3"></span>
																			</i>
																		</div>
																		<!--end::Arrow-->
																		<!--begin::Logo-->
																		<img src="assets/media/svg/card-logos/american-express.svg" class="w-40px me-3" alt="" />
																		<!--end::Logo-->
																		<!--begin::Summary-->
																		<div class="me-3">
																			<div class="d-flex align-items-center fw-bold">American Express
																			<div class="badge badge-light-danger ms-5">Expired</div></div>
																			<div class="text-muted">Expires Aug 2021</div>
																		</div>
																		<!--end::Summary-->
																	</div>
																	<!--end::Toggle-->
																	<!--begin::Input-->
																	<div class="d-flex my-3 ms-9">
																		<!--begin::Radio-->
																		<label class="form-check form-check-custom form-check-solid me-5">
																			<input class="form-check-input" type="radio" name="payment_method" />
																		</label>
																		<!--end::Radio-->
																	</div>
																	<!--end::Input-->
																</div>
																<!--end::Header-->
																<!--begin::Body-->
																<div id="kt_create_new_payment_method_3" class="collapse fs-6 ps-10">
																	<!--begin::Details-->
																	<div class="d-flex flex-wrap py-5">
																		<!--begin::Col-->
																		<div class="flex-equal me-5">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Name</td>
																					<td class="text-gray-800">Max Smith</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Number</td>
																					<td class="text-gray-800">**** 1620</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Expires</td>
																					<td class="text-gray-800">08/2021</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Type</td>
																					<td class="text-gray-800">American express credit card</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Issuer</td>
																					<td class="text-gray-800">USABANK</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">ID</td>
																					<td class="text-gray-800">id_89457jcje63</td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																		<!--begin::Col-->
																		<div class="flex-equal">
																			<table class="table table-flush fw-semibold gy-1">
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Billing address</td>
																					<td class="text-gray-800">US</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Phone</td>
																					<td class="text-gray-800">No phone provided</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Email</td>
																					<td class="text-gray-800">
																						<a href="#" class="text-gray-900 text-hover-primary">max@kt.com</a>
																					</td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">Origin</td>
																					<td class="text-gray-800">United States of America
																					<div class="symbol symbol-20px symbol-circle ms-2">
																						<img src="assets/media/flags/united-states.svg" />
																					</div></td>
																				</tr>
																				<tr>
																					<td class="text-muted min-w-125px w-125px">CVC check</td>
																					<td class="text-gray-800">Failed
																					<i class="ki-duotone ki-cross fs-2 text-danger">
																						<span class="path1"></span>
																						<span class="path2"></span>
																					</i></td>
																				</tr>
																			</table>
																		</div>
																		<!--end::Col-->
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::Body-->
															</div>
															<!--end::Option-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Payment method-->
												<!--begin::Card-->
												<div class="card card-flush pt-3 mb-5 mb-lg-10">
													<!--begin::Card header-->
													<div class="card-header">
														<!--begin::Card title-->
														<div class="card-title">
															<h2 class="fw-bold">Advanced Options</h2>
														</div>
														<!--begin::Card title-->
													</div>
													<!--end::Card header-->
													<!--begin::Card body-->
													<div class="card-body pt-0">
														<!--begin::Custom fields-->
														<div class="d-flex flex-column mb-15 fv-row">
															<!--begin::Label-->
															<div class="fs-5 fw-bold form-label mb-3">Custom fields
															<span class="ms-2 cursor-pointer" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Add custom fields to the billing invoice.">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span></div>
															<!--end::Label-->
															<!--begin::Table wrapper-->
															<div class="table-responsive">
																<!--begin::Table-->
																<table id="kt_create_new_custom_fields" class="table align-middle table-row-dashed fw-semibold fs-6 gy-5">
																	<!--begin::Table head-->
																	<thead>
																		<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
																			<th class="pt-0">Field Name</th>
																			<th class="pt-0">Field Value</th>
																			<th class="pt-0 text-end">Remove</th>
																		</tr>
																	</thead>
																	<!--end::Table head-->
																	<!--begin::Table body-->
																	<tbody>
																		<tr>
																			<td>
																				<input type="text" class="form-control form-control-solid" name="row-name" value="" />
																			</td>
																			<td>
																				<input type="text" class="form-control form-control-solid" name="row-value" value="" />
																			</td>
																			<td class="text-end">
																				<button type="button" class="btn btn-icon btn-flex btn-active-light-primary w-30px h-30px me-3" data-kt-action="field_remove">
																					<i class="ki-duotone ki-trash fs-3">
																						<span class="path1"></span>
																						<span class="path2"></span>
																						<span class="path3"></span>
																						<span class="path4"></span>
																						<span class="path5"></span>
																					</i>
																				</button>
																			</td>
																		</tr>
																	</tbody>
																	<!--end::Table body-->
																</table>
																<!--end:Table-->
															</div>
															<!--end::Table wrapper-->
															<!--begin::Add custom field-->
															<button type="button" class="btn btn-light-primary me-auto" id="kt_create_new_custom_fields_add">Add custom field</button>
															<!--end::Add custom field-->
														</div>
														<!--end::Custom fields-->
														<!--begin::Invoice footer-->
														<div class="d-flex flex-column mb-10 fv-row">
															<!--begin::Label-->
															<div class="fs-5 fw-bold form-label mb-3">Invoice footer
															<span class="ms-2 cursor-pointer" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-content="Add an addition invoice footer note.">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span></div>
															<!--end::Label-->
															<textarea class="form-control form-control-solid rounded-3" rows="4"></textarea>
														</div>
														<!--end::Invoice footer-->
														<!--begin::Option-->
														<div class="d-flex flex-column mb-5 fv-row rounded-3 p-7 border border-dashed border-gray-300">
															<!--begin::Label-->
															<div class="fs-5 fw-bold form-label mb-3">Usage treshold
															<span class="ms-2 cursor-pointer" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-delay-hide="1000" data-bs-content="Thresholds help manage risk by limiting the unpaid usage balance a customer can accrue. Thresholds only measure and bill for metered usage (including discounts but excluding tax). &lt;a href='#'&gt;Learn more&lt;/a&gt;.">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span></div>
															<!--end::Label-->
															<!--begin::Checkbox-->
															<label class="form-check form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" checked="checked" value="1" />
																<span class="form-check-label text-gray-600">Bill immediately if usage treshold reaches 80%.</span>
															</label>
															<!--end::Checkbox-->
														</div>
														<!--end::Option-->
														<!--begin::Option-->
														<div class="d-flex flex-column fv-row rounded-3 p-7 border border-dashed border-gray-300">
															<!--begin::Label-->
															<div class="fs-5 fw-bold form-label mb-3">Pro-rate billing
															<span class="ms-2 cursor-pointer" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-html="true" data-bs-delay-hide="1000" data-bs-content="Pro-rated billing dynamically calculates the remainder amount leftover per billing cycle that is owed. &lt;a href='#'&gt;Learn more&lt;/a&gt;.">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span></div>
															<!--end::Label-->
															<!--begin::Checkbox-->
															<label class="form-check form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1" />
																<span class="form-check-label text-gray-600">Allow pro-rated billing when treshold usage is paid before end of billing cycle.</span>
															</label>
															<!--end::Checkbox-->
														</div>
														<!--end::Option-->
													</div>
													<!--end::Card body-->
												</div>
												<!--end::Card-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Content-->
										<!--begin::Sidebar-->
										<div class="flex-column flex-lg-row-auto w-100 w-lg-250px w-xl-300px mb-10 order-1 order-lg-2">
											<!--begin::Card-->
											<div class="card card-flush pt-3 mb-0" data-kt-sticky="true" data-kt-sticky-name="subscription-summary" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{lg: '250px', xl: '300px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
												<!--begin::Card header-->
												<div class="card-header">
													<!--begin::Card title-->
													<div class="card-title">
														<h2>Summary</h2>
													</div>
													<!--end::Card title-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body pt-0 fs-6">
													<!--begin::Section-->
													<div class="mb-7">
														<!--begin::Title-->
														<h5 class="mb-3">Customer details</h5>
														<!--end::Title-->
														<!--begin::Details-->
														<div class="d-flex align-items-center mb-1">
															<!--begin::Name-->
															<a href="{{ route('metronic.apps.customers.view') }}" class="fw-bold text-gray-800 text-hover-primary me-2">Sean Bean</a>
															<!--end::Name-->
															<!--begin::Status-->
															<span class="badge badge-light-success">Active</span>
															<!--end::Status-->
														</div>
														<!--end::Details-->
														<!--begin::Email-->
														<a href="#" class="fw-semibold text-gray-600 text-hover-primary">sean@dellito.com</a>
														<!--end::Email-->
													</div>
													<!--end::Section-->
													<!--begin::Seperator-->
													<div class="separator separator-dashed mb-7"></div>
													<!--end::Seperator-->
													<!--begin::Section-->
													<div class="mb-7">
														<!--begin::Title-->
														<h5 class="mb-3">Product details</h5>
														<!--end::Title-->
														<!--begin::Details-->
														<div class="mb-0">
															<!--begin::Plan-->
															<span class="badge badge-light-info me-2">Basic Bundle</span>
															<!--end::Plan-->
															<!--begin::Price-->
															<span class="fw-semibold text-gray-600">$149.99 / Year</span>
															<!--end::Price-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::Section-->
													<!--begin::Seperator-->
													<div class="separator separator-dashed mb-7"></div>
													<!--end::Seperator-->
													<!--begin::Section-->
													<div class="mb-10">
														<!--begin::Title-->
														<h5 class="mb-3">Payment Details</h5>
														<!--end::Title-->
														<!--begin::Details-->
														<div class="mb-0">
															<!--begin::Card info-->
															<div class="fw-semibold text-gray-600 d-flex align-items-center">Mastercard
															<img src="assets/media/svg/card-logos/mastercard.svg" class="w-35px ms-2" alt="" /></div>
															<!--end::Card info-->
															<!--begin::Card expiry-->
															<div class="fw-semibold text-gray-600">Expires Dec 2024</div>
															<!--end::Card expiry-->
														</div>
														<!--end::Details-->
													</div>
													<!--end::Section-->
													<!--begin::Actions-->
													<div class="mb-0">
														<button type="submit" class="btn btn-primary" id="kt_subscriptions_create_button">
															<!--begin::Indicator label-->
															<span class="indicator-label">Create Subscription</span>
															<!--end::Indicator label-->
															<!--begin::Indicator progress-->
															<span class="indicator-progress">Please wait...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															<!--end::Indicator progress-->
														</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end::Sidebar-->
									</div>
									<!--end::Layout-->
									<!--begin::Modals-->
									<!--begin::Modal - Users Search-->
									<div class="modal fade" id="kt_modal_customer_search" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header pb-0 border-0 justify-content-end">
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
													<div class="text-center mb-12">
														<h1 class="fw-bold mb-3">Search Customers</h1>
														<div class="text-gray-500 fw-semibold fs-5">Add a customer to a subscription</div>
													</div>
													<!--end::Content-->
													<!--begin::Search-->
													<div id="kt_modal_customer_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
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
																<span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
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
																<!--begin::Illustration-->
																<div class="text-center px-4 pt-10">
																	<img src="assets/media/illustrations/sketchy-1/4.png" alt="" class="mw-100 mh-200px" />
																</div>
																<!--end::Illustration-->
															</div>
															<!--end::Suggestions-->
															<!--begin::Results-->
															<div data-kt-search-element="results" class="d-none">
																<!--begin::Users-->
																<div class="mh-300px scroll-y me-n5 pe-5">
																	<!--begin::User-->
																	<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
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
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
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
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
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
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
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
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
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
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Mikaela Collins</span>
																			<span class="badge badge-light">Head Of Marketing</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Francis Mitcham</span>
																			<span class="badge badge-light">Software Arcitect</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Olivia Wild</span>
																			<span class="badge badge-light">System Admin</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Neil Owen</span>
																			<span class="badge badge-light">Account Manager</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="d-flex align-items-center p-3 rounded-3 border-hover border border-dashed border-gray-300 cursor-pointer mb-1" data-kt-search-element="customer">
																		<!--begin::Avatar-->
																		<div class="symbol symbol-35px symbol-circle me-5">
																			<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Info-->
																		<div class="fw-semibold">
																			<span class="fs-6 text-gray-800 me-2">Dan Wilson</span>
																			<span class="badge badge-light">Web Desinger</span>
																		</div>
																		<!--end::Info-->
																	</div>
																	<!--end::User-->
																</div>
																<!--end::Users-->
															</div>
															<!--end::Results-->
															<!--begin::Empty-->
															<div data-kt-search-element="empty" class="text-center d-none">
																<!--begin::Message-->
																<div class="fw-semibold py-0 mb-10">
																	<div class="text-gray-600 fs-3 mb-2">No users found</div>
																	<div class="text-gray-500 fs-6">Try to search by username, full name or email...</div>
																</div>
																<!--end::Message-->
																<!--begin::Illustration-->
																<div class="text-center px-4">
																	<img src="assets/media/illustrations/sketchy-1/9.png" alt="user" class="mw-100 mh-200px" />
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
									<!--begin::Modal - New Product-->
									<div class="modal fade" id="kt_modal_add_product" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Form-->
												<form class="form" action="#" id="kt_modal_add_product_form">
													<!--begin::Modal header-->
													<div class="modal-header">
														<!--begin::Modal title-->
														<h2 class="fw-bold">Add a Product</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
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
														<!--begin::Label-->
														<h3 class="mb-7">
															<span class="fw-bold required">Select Subscription</span>
															<span class="ms-1" data-bs-toggle="tooltip" title="Please select a subscription">
																<i class="ki-duotone ki-information fs-7">
																	<span class="path1"></span>
																	<span class="path2"></span>
																	<span class="path3"></span>
																</i>
															</span>
														</h3>
														<!--end::Label-->
														<!--begin::Scroll-->
														<div class="scroll-y mh-300px me-n7 pe-7">
															<!--begin::Product-->
															<div class="fv-row">
																<!--begin::Subscription-->
																<label class="d-flex align-items-center mb-5">
																	<!--begin::Radio-->
																	<span class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" name="product" checked="checked" data-kt-product-name="Basic" data-kt-product-price="15.99" data-kt-product-frequency="Month" />
																	</span>
																	<!--end::Radio-->
																	<!--begin::Description-->
																	<span class="d-flex flex-column me-3">
																		<span class="fw-bold">Basic</span>
																		<span class="text-gray-500 fw-semibold fs-6">Basic subscription</span>
																	</span>
																	<!--end::Description-->
																	<!--begin::Pricing-->
																	<span class="fw-bold ms-auto">$15.99 /
																	<span class="text-gray-500 fs-6 fw-semibold">Month</span></span>
																	<!--end::Pricing-->
																</label>
																<!--end::Subscription-->
																<!--begin::Subscription-->
																<label class="d-flex align-items-center mb-5">
																	<!--begin::Radio-->
																	<span class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" name="product" data-kt-product-name="Basic Bundle" data-kt-product-price="149.99" data-kt-product-frequency="Year" />
																	</span>
																	<!--end::Radio-->
																	<!--begin::Description-->
																	<span class="d-flex flex-column me-3">
																		<span class="fw-bold">Basic Bundle</span>
																		<span class="text-gray-500 fw-semibold fs-6">Basic yearly bundle</span>
																	</span>
																	<!--end::Description-->
																	<!--begin::Pricing-->
																	<span class="fw-bold ms-auto">$149.99 /
																	<span class="text-gray-500 fs-6 fw-semibold">Year</span></span>
																	<!--end::Pricing-->
																</label>
																<!--end::Subscription-->
																<!--begin::Subscription-->
																<label class="d-flex align-items-center mb-5">
																	<!--begin::Radio-->
																	<span class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" name="product" data-kt-product-name="Teams" data-kt-product-price="20.99" data-kt-product-frequency="Month" />
																	</span>
																	<!--end::Radio-->
																	<!--begin::Description-->
																	<span class="d-flex flex-column me-3">
																		<span class="fw-bold">Teams</span>
																		<span class="text-gray-500 fw-semibold fs-6">Teams subscription</span>
																	</span>
																	<!--end::Description-->
																	<!--begin::Pricing-->
																	<span class="fw-bold ms-auto">$20.99 /
																	<span class="text-gray-500 fs-6 fw-semibold">Month</span></span>
																	<!--end::Pricing-->
																</label>
																<!--end::Subscription-->
																<!--begin::Subscription-->
																<label class="d-flex align-items-center mb-5">
																	<!--begin::Radio-->
																	<span class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" name="product" data-kt-product-name="Teams Bundle" data-kt-product-price="199.99" data-kt-product-frequency="Year" />
																	</span>
																	<!--end::Radio-->
																	<!--begin::Description-->
																	<span class="d-flex flex-column me-3">
																		<span class="fw-bold">Teams Bundle</span>
																		<span class="text-gray-500 fw-semibold fs-6">Teams yearly bundle</span>
																	</span>
																	<!--end::Description-->
																	<!--begin::Pricing-->
																	<span class="fw-bold ms-auto">$199.99 /
																	<span class="text-gray-500 fs-6 fw-semibold">Year</span></span>
																	<!--end::Pricing-->
																</label>
																<!--end::Subscription-->
																<!--begin::Subscription-->
																<label class="d-flex align-items-center mb-5">
																	<!--begin::Radio-->
																	<span class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" name="product" data-kt-product-name="Corporate" data-kt-product-price="224.99" data-kt-product-frequency="Month" />
																	</span>
																	<!--end::Radio-->
																	<!--begin::Description-->
																	<span class="d-flex flex-column me-3">
																		<span class="fw-bold">Corporate</span>
																		<span class="text-gray-500 fw-semibold fs-6">Corporate subscription</span>
																	</span>
																	<!--end::Description-->
																	<!--begin::Pricing-->
																	<span class="fw-bold ms-auto">$224.99 /
																	<span class="text-gray-500 fs-6 fw-semibold">Month</span></span>
																	<!--end::Pricing-->
																</label>
																<!--end::Subscription-->
																<!--begin::Subscription-->
																<label class="d-flex align-items-center mb-5">
																	<!--begin::Radio-->
																	<span class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" name="product" data-kt-product-name="Corporate Bundle" data-kt-product-price="1249.99" data-kt-product-frequency="Year" />
																	</span>
																	<!--end::Radio-->
																	<!--begin::Description-->
																	<span class="d-flex flex-column me-3">
																		<span class="fw-bold">Corporate Bundle</span>
																		<span class="text-gray-500 fw-semibold fs-6">Corporate yearly bundle</span>
																	</span>
																	<!--end::Description-->
																	<!--begin::Pricing-->
																	<span class="fw-bold ms-auto">$1249.99 /
																	<span class="text-gray-500 fs-6 fw-semibold">Year</span></span>
																	<!--end::Pricing-->
																</label>
																<!--end::Subscription-->
																<!--begin::Subscription-->
																<label class="d-flex align-items-center mb-5">
																	<!--begin::Radio-->
																	<span class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" name="product" data-kt-product-name="Enterprise" data-kt-product-price="224.99" data-kt-product-frequency="Month" />
																	</span>
																	<!--end::Radio-->
																	<!--begin::Description-->
																	<span class="d-flex flex-column me-3">
																		<span class="fw-bold">Enterprise</span>
																		<span class="text-gray-500 fw-semibold fs-6">Enterprise subscription</span>
																	</span>
																	<!--end::Description-->
																	<!--begin::Pricing-->
																	<span class="fw-bold ms-auto">$224.99 /
																	<span class="text-gray-500 fs-6 fw-semibold">Month</span></span>
																	<!--end::Pricing-->
																</label>
																<!--end::Subscription-->
																<!--begin::Subscription-->
																<label class="d-flex align-items-center mb-5">
																	<!--begin::Radio-->
																	<span class="form-check form-check-custom form-check-solid me-5">
																		<input class="form-check-input" type="radio" name="product" data-kt-product-name="Enterprise Bundle" data-kt-product-price="2249.99" data-kt-product-frequency="Year" />
																	</span>
																	<!--end::Radio-->
																	<!--begin::Description-->
																	<span class="d-flex flex-column me-3">
																		<span class="fw-bold">Enterprise Bundle</span>
																		<span class="text-gray-500 fw-semibold fs-6">Enterprise yearly bundle</span>
																	</span>
																	<!--end::Description-->
																	<!--begin::Pricing-->
																	<span class="fw-bold ms-auto">$2249.99 /
																	<span class="text-gray-500 fs-6 fw-semibold">Year</span></span>
																	<!--end::Pricing-->
																</label>
																<!--end::Subscription-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Scroll-->
													</div>
													<!--end::Modal body-->
													<!--begin::Modal footer-->
													<div class="modal-footer flex-center">
														<!--begin::Button-->
														<button type="reset" id="kt_modal_add_product_cancel" class="btn btn-light me-3">Discard</button>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="button" id="kt_modal_add_product_submit" class="btn btn-primary">
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
									<!--end::Modal - New Product-->
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
<script src="assets/js/custom/apps/subscriptions/add/advanced.js"></script>
<script src="assets/js/custom/apps/subscriptions/add/customer-select.js"></script>
<script src="assets/js/custom/apps/subscriptions/add/products.js"></script>
<script src="assets/js/widgets.bundle.js"></script>
<script src="assets/js/custom/widgets.js"></script>
<script src="assets/js/custom/apps/chat/chat.js"></script>
<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="assets/js/custom/utilities/modals/create-app.js"></script>
<script src="assets/js/custom/utilities/modals/new-card.js"></script>
@endsection
