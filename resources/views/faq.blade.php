<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	 
	<title>Home</title>
	<meta charset="utf-8" />
	<meta name="description"
		content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
	<meta name="keywords"
		content="Metronic, Bootstrap, Bootstrap 5, Angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask &amp; Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title"
		content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask &amp; Laravel Admin Dashboard Theme" />
	<meta property="og:url" content="https://keenthemes.com/metronic" />
	<meta property="og:site_name" content="Keenthemes | Metronic" />
	<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
	<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used by this page)-->
	<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<style>
		a.btn.btn-primary {
			background: #7971D9;
		}

		a.btn.btn-light.fw-bold.text-gray-800.text-hover-primary.fs-7 {
			margin-left: 29px;


		}
		#kt_app_sidebar_logo img {
  height: 150px !important;
  padding: 0 !important;
  margin-left: -35px !important;
}
	</style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body data-kt-name="metronic" id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-sidebar-enabled="true"
	data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
	data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
	class="app-default">
	<!--begin::Theme mode setup on page load-->
	<script>if (document.documentElement) { const defaultThemeMode = "system"; const name = document.body.getAttribute("data-kt-name"); let themeMode = localStorage.getItem("kt_" + (name !== null ? name + "_" : "") + "theme_mode_value"); if (themeMode === null) { if (defaultThemeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } else { themeMode = defaultThemeMode; } } document.documentElement.setAttribute("data-theme", themeMode); }</script>
	<!--end::Theme mode setup on page load-->
	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!--begin::Header-->
			<div id="kt_app_header" class="app-header">
				<!--begin::Header container-->
				<div class="app-container container-fluid d-flex align-items-stretch justify-content-between">
					<!--begin::sidebar mobile toggle-->
					<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
						<div class="btn btn-icon btn-active-color-primary w-35px h-35px"
							id="kt_app_sidebar_mobile_toggle">
							<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
							<span class="svg-icon svg-icon-1">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
										fill="currentColor" />
									<path opacity="0.3"
										d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
					</div>
					<!--end::sidebar mobile toggle-->
					<!--begin::Mobile logo-->
					<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
						<a href="../../demo1/dist/index.html" class="d-lg-none">
							<img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
						</a>
					</div>
					<!--end::Mobile logo-->
					<!--begin::Header wrapper-->
					<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1"
						id="kt_app_header_wrapper">
						<!--begin::Menu wrapper-->
						<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
							data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
							data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end"
							data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
							data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
							data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">

						</div>
						<!--end::Menu wrapper-->
						<!--begin::Navbar-->
						<div class="app-navbar flex-shrink-0">
							<!--begin::Search-->
							<div class="app-navbar-item align-items-stretch ms-1 ms-lg-3">
								<!--begin::Search-->
								<div id="kt_header_search" class="header-search d-flex align-items-stretch"
									data-kt-search-keypress="true" data-kt-search-min-length="2"
									data-kt-search-enter="enter" data-kt-search-layout="menu"
									data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
									data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
									<!--begin::Search toggle-->
									<div class="d-flex align-items-center" data-kt-search-element="toggle"
										id="kt_header_search_toggle">
										<div
											class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
														height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
														fill="currentColor" />
													<path
														d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
														fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Search toggle-->
									<!--begin::Menu-->
									<div data-kt-search-element="content"
										class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
										<!--begin::Wrapper-->
										<div data-kt-search-element="wrapper">
											<!--begin::Form-->
											<form data-kt-search-element="form" class="w-100 position-relative mb-3"
												autocomplete="off">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span
													class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
															height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
															fill="currentColor" />
														<path
															d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Input-->
												<input type="text"
													class="search-input form-control form-control-flush ps-10"
													name="search" value="" placeholder="Search..."
													data-kt-search-element="input" />
												<!--end::Input-->
												<!--begin::Spinner-->
												<span
													class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
													data-kt-search-element="spinner">
													<span
														class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
												</span>
												<!--end::Spinner-->
												<!--begin::Reset-->
												<span
													class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
													data-kt-search-element="clear">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
																rx="1" transform="rotate(-45 6 17.3137)"
																fill="currentColor" />
															<rect x="7.41422" y="6" width="16" height="2" rx="1"
																transform="rotate(45 7.41422 6)" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<!--end::Reset-->
												<!--begin::Toolbar-->
												<div class="position-absolute top-50 end-0 translate-middle-y"
													data-kt-search-element="toolbar">
													<!--begin::Preferences toggle-->
													<div data-kt-search-element="preferences-show"
														class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1"
														data-bs-toggle="tooltip" title="Show search preferences">
														<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
														<span class="svg-icon svg-icon-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3"
																	d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z"
																	fill="currentColor" />
																<path
																	d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z"
																	fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Preferences toggle-->
													<!--begin::Advanced search toggle-->
													<div data-kt-search-element="advanced-options-form-show"
														class="btn btn-icon w-20px btn-sm btn-active-color-primary"
														data-bs-toggle="tooltip" title="Show more search options">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-2">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<path
																	d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
																	fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<!--end::Advanced search toggle-->
												</div>
												<!--end::Toolbar-->
											</form>
											<!--end::Form-->
											<!--begin::Separator-->
											<div class="separator border-gray-200 mb-6"></div>
											<!--end::Separator-->
											<!--begin::Recently viewed-->
											<div data-kt-search-element="results" class="d-none">
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-350px">
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pb-5"
														data-kt-search-element="category-title">Users</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-6.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div
															class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Karina Clark</span>
															<span class="fs-7 fw-semibold text-muted">Marketing
																Manager</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-2.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div
															class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Olivia Bold</span>
															<span class="fs-7 fw-semibold text-muted">Software
																Engineer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-9.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div
															class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Ana Clark</span>
															<span class="fs-7 fw-semibold text-muted">UI/UX
																Designer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-14.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div
															class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Nick Pitola</span>
															<span class="fs-7 fw-semibold text-muted">Art
																Director</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="assets/media/avatars/300-11.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div
															class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Edward Kulnic</span>
															<span class="fs-7 fw-semibold text-muted">System
																Administrator</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5"
														data-kt-search-element="category-title">Customers</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px"
																	src="assets/media/svg/brand-logos/volicity-9.svg"
																	alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div
															class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Rbranding</span>
															<span class="fs-7 fw-semibold text-muted">UI Design</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px"
																	src="assets/media/svg/brand-logos/tvit.svg"
																	alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div
															class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Re-branding</span>
															<span class="fs-7 fw-semibold text-muted">Web
																Development</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px"
																	src="assets/media/svg/misc/infography.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div
															class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Business Analytics App</span>
															<span
																class="fs-7 fw-semibold text-muted">Administration</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px"
																	src="assets/media/svg/brand-logos/leaf.svg"
																	alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div
															class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
															<span class="fs-7 fw-semibold text-muted">Marketing</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px"
																	src="assets/media/svg/brand-logos/tower.svg"
																	alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div
															class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Tower Group Website</span>
															<span class="fs-7 fw-semibold text-muted">Google
																Adwords</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5"
														data-kt-search-element="category-title">Projects</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
																			fill="currentColor" />
																		<rect x="7" y="17" width="6" height="2" rx="1"
																			fill="currentColor" />
																		<rect x="7" y="12" width="10" height="2" rx="1"
																			fill="currentColor" />
																		<rect x="7" y="7" width="6" height="2" rx="1"
																			fill="currentColor" />
																		<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Si-Fi Project by AU
																Themes</span>
															<span class="fs-7 fw-semibold text-muted">#45670</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="8" y="9" width="3" height="10" rx="1.5"
																			fill="currentColor" />
																		<rect opacity="0.5" x="13" y="5" width="3"
																			height="14" rx="1.5" fill="currentColor" />
																		<rect x="18" y="11" width="3" height="8"
																			rx="1.5" fill="currentColor" />
																		<rect x="3" y="13" width="3" height="6" rx="1.5"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Shopix Mobile App
																Planning</span>
															<span class="fs-7 fw-semibold text-muted">#45690</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																			fill="currentColor" />
																		<rect x="6" y="12" width="7" height="2" rx="1"
																			fill="currentColor" />
																		<rect x="6" y="7" width="12" height="2" rx="1"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Finance Monitoring SAAS
																Discussion</span>
															<span class="fs-7 fw-semibold text-muted">#21090</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="#"
														class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="18" height="18" viewBox="0 0 18 18"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z"
																			fill="currentColor" />
																		<path
																			d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z"
																			fill="currentColor" />
																		<rect x="7" y="6" width="4" height="4" rx="2"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Dashboard Analitics
																Launch</span>
															<span class="fs-7 fw-semibold text-muted">#34560</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Recently viewed-->
											<div class="mb-5" data-kt-search-element="main">
												<!--begin::Heading-->
												<div class="d-flex flex-stack fw-semibold mb-4">
													<!--begin::Label-->
													<span class="text-muted fs-6 me-2">Recently Searched:</span>
													<!--end::Label-->
												</div>
												<!--end::Heading-->
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-325px">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z"
																			fill="currentColor" />
																		<path opacity="0.3"
																			d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z"
																			fill="currentColor" />
																		<path opacity="0.3" d="M15 17H9V20H15V17Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-semibold">
																by Note sharing system</a>
															<span class="fs-7 text-muted fw-semibold">#45789</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z"
																			fill="currentColor" />
																		<path
																			d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
																API Project Meeting</a>
															<span class="fs-7 text-muted fw-semibold">#84050</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z"
																			fill="currentColor" />
																		<path opacity="0.3"
																			d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
																Monitoring App Launch</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M20 8L12.5 5L5 14V19H20V8Z"
																			fill="currentColor" />
																		<path
																			d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
																Reference FAQ</a>
															<span class="fs-7 text-muted fw-semibold">#67945</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
																			fill="currentColor" />
																		<path opacity="0.3"
																			d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
																App Development</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
																			fill="currentColor" />
																		<path opacity="0.3"
																			d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
																Mobile App</a>
															<span class="fs-7 text-muted fw-semibold">#45690</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M20 8L12.5 5L5 14V19H20V8Z"
																			fill="currentColor" />
																		<path
																			d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
																UI Design" Launch</a>
															<span class="fs-7 text-muted fw-semibold">#24005</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Empty-->
											<div data-kt-search-element="empty" class="text-center d-none">
												<!--begin::Icon-->
												<div class="pt-10 pb-10">
													<!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
													<span class="svg-icon svg-icon-4x opacity-50">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
																d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z"
																fill="currentColor" />
															<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z"
																fill="currentColor" />
															<rect x="13.6993" y="13.6656" width="4.42828"
																height="1.73089" rx="0.865447"
																transform="rotate(45 13.6993 13.6656)"
																fill="currentColor" />
															<path
																d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Icon-->
												<!--begin::Message-->
												<div class="pb-15 fw-semibold">
													<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
													<div class="text-muted fs-7">Please try again with a different query
													</div>
												</div>
												<!--end::Message-->
											</div>
											<!--end::Empty-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Preferences-->
										<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text"
													class="form-control form-control-sm form-control-solid"
													placeholder="Contains the word" name="query" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="has"
															checked="checked" />
														<span
															class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type"
															value="users" />
														<span
															class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type"
															value="orders" />
														<span
															class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type"
															value="projects" />
														<span
															class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="assignedto"
													class="form-control form-control-sm form-control-solid"
													placeholder="Assigned to" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="collaborators"
													class="form-control form-control-sm form-control-solid"
													placeholder="Collaborators" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment"
															value="has" checked="checked" />
														<span
															class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has
															attachment</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment"
															value="any" />
														<span
															class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<select name="timezone" aria-label="Select a Timezone"
													data-control="select2" data-placeholder="date_period"
													class="form-select form-select-sm form-select-solid">
													<option value="next">Within the next</option>
													<option value="last">Within the last</option>
													<option value="between">Between</option>
													<option value="on">On</option>
												</select>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-6">
													<input type="number" name="date_number"
														class="form-control form-control-sm form-control-solid"
														placeholder="Lenght" value="" />
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<select name="date_typer" aria-label="Select a Timezone"
														data-control="select2" data-placeholder="Period"
														class="form-select form-select-sm form-select-solid">
														<option value="days">Days</option>
														<option value="weeks">Weeks</option>
														<option value="months">Months</option>
														<option value="years">Years</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="reset"
													class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
													data-kt-search-element="advanced-options-form-cancel">Cancel</button>
												<a href="../../demo1/dist/pages/search/horizontal.html"
													class="btn btn-sm fw-bold btn-primary"
													data-kt-search-element="advanced-options-form-search">Search</a>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
										<!--begin::Preferences-->
										<form data-kt-search-element="preferences" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="pb-4 border-bottom">
												<label
													class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span
														class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
													<input class="form-check-input" type="checkbox" value="1"
														checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label
													class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span
														class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
													<input class="form-check-input" type="checkbox" value="1"
														checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label
													class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span
														class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate
														Programs</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label
													class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span
														class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
													<input class="form-check-input" type="checkbox" value="1"
														checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label
													class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span
														class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end pt-7">
												<button type="reset"
													class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
													data-kt-search-element="preferences-dismiss">Cancel</button>
												<button type="submit" class="btn btn-sm fw-bold btn-primary">Save
													Changes</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Search-->
							</div>
							<!--end::Search-->
						 
							<!--begin::Notifications-->
							<div class="app-navbar-item ms-1 ms-lg-3">
								<!--begin::Menu- wrapper-->
								<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
									data-kt-menu-trigger="click" data-kt-menu-attach="parent"
									data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
									<span class="svg-icon svg-icon-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
												fill="currentColor" />
											<path
												d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
									data-kt-menu="true">
									<!--begin::Heading-->
									<div class="d-flex flex-column bgi-no-repeat rounded-top"
										style="background-image:url('assets/media/misc/pattern-1.jpg')">
										<!--begin::Title-->
										<h3 class="text-white fw-semibold px-9 mt-10 mb-6">Notifications
											<span class="fs-8 opacity-75 ps-3">24 reports</span>
										</h3>
										<!--end::Title-->
										<!--begin::Tabs-->
										<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
											<li class="nav-item">
												<a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
													data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
											</li>
											<li class="nav-item">
												<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
													data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
											</li>
											<li class="nav-item">
												<a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
													data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
											</li>
										</ul>
										<!--end::Tabs-->
									</div>
									<!--end::Heading-->
									<!--begin::Tab content-->
									<div class="tab-content">
										<!--begin::Tab panel-->
										<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
											<!--begin::Items-->
											<div class="scroll-y mh-325px my-5 px-8">
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
																			fill="currentColor" />
																		<path
																			d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
																Alice</a>
															<div class="text-gray-400 fs-7">Phase 1 development</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">1 hr</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-danger">
																<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-danger">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20"
																			height="20" rx="10" fill="currentColor" />
																		<rect x="11" y="14" width="7" height="2" rx="1"
																			transform="rotate(-90 11 14)"
																			fill="currentColor" />
																		<rect x="11" y="17" width="2" height="2" rx="1"
																			transform="rotate(-90 11 17)"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
																Confidential</a>
															<div class="text-gray-400 fs-7">Confidential staff documents
															</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-warning">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
																			fill="currentColor" />
																		<path
																			d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
																HR</a>
															<div class="text-gray-400 fs-7">Corporeate staff profiles
															</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">5 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-success">
																<!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-success">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
																			fill="currentColor" />
																		<path
																			d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z"
																			fill="currentColor" />
																		<path opacity="0.3"
																			d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
																			fill="currentColor" />
																		<path
																			d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
																Redux</a>
															<div class="text-gray-400 fs-7">New frontend admin theme
															</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 days</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-primary">
																<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z"
																			fill="currentColor" />
																		<path
																			d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
																Breafing</a>
															<div class="text-gray-400 fs-7">Product launch status update
															</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">21 Jan</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-info">
																<!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-info">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
																			fill="currentColor" />
																		<path
																			d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
																Assets</a>
															<div class="text-gray-400 fs-7">Collection of banner images
															</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">21 Jan</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center">
														<!--begin::Symbol-->
														<div class="symbol symbol-35px me-4">
															<span class="symbol-label bg-light-warning">
																<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-warning">
																	<svg width="24" height="25" viewBox="0 0 24 25"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
																			fill="currentColor" />
																		<path
																			d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="mb-0 me-2">
															<a href="#"
																class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
																Assets</a>
															<div class="text-gray-400 fs-7">Collection of SVG icons
															</div>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">20 March</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
											<!--begin::View more-->
											<div class="py-3 text-center border-top">
												<a href="../../demo1/dist/pages/user-profile/activity.html"
													class="btn btn-color-gray-600 btn-active-color-primary">View All
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-5">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2"
																rx="1" transform="rotate(-180 18 13)"
																fill="currentColor" />
															<path
																d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon--></a>
											</div>
											<!--end::View more-->
										</div>
										<!--end::Tab panel-->
										<!--begin::Tab panel-->
										<div class="tab-pane fade show active" id="kt_topbar_notifications_2"
											role="tabpanel">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column px-9">
												<!--begin::Section-->
												<div class="pt-10 pb-0">
													<!--begin::Title-->
													<h3 class="text-dark text-center fw-bold">Get Pro Access</h3>
													<!--end::Title-->
													<!--begin::Text-->
													<div class="text-center text-gray-600 fw-semibold pt-1">Outlines
														keep you honest. They stoping you from amazing poorly about
														drive</div>
													<!--end::Text-->
													<!--begin::Action-->
													<div class="text-center mt-5 mb-9">
														<a href="#" class="btn btn-sm btn-primary px-6"
															data-bs-toggle="modal"
															data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
													</div>
													<!--end::Action-->
												</div>
												<!--end::Section-->
												<!--begin::Illustration-->
												<div class="text-center px-4">
													<img class="mw-100 mh-200px" alt="image"
														src="assets/media/illustrations/sketchy-1/1.png" />
												</div>
												<!--end::Illustration-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Tab panel-->
										<!--begin::Tab panel-->
										<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
											<!--begin::Items-->
											<div class="scroll-y mh-325px my-5 px-8">
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200
															OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">New
															order</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Just now</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500
															ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">New
															customer</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200
															OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">Payment
															process</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">5 hrs</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300
															WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">Search
															query</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">2 days</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200
															OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">API
															connection</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">1 week</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-success me-4">200
															OK</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">Database
															restore</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Mar 5</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300
															WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">System
															update</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">May 15</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300
															WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">Server
															OS update</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Apr 3</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-warning me-4">300
															WRN</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">API
															rollback</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Jun 30</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500
															ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">Refund
															process</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Jul 10</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500
															ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
															process</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Sep 10</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Section-->
													<div class="d-flex align-items-center me-2">
														<!--begin::Code-->
														<span class="w-70px badge badge-light-danger me-4">500
															ERR</span>
														<!--end::Code-->
														<!--begin::Title-->
														<a href="#"
															class="text-gray-800 text-hover-primary fw-semibold">Mail
															tasks</a>
														<!--end::Title-->
													</div>
													<!--end::Section-->
													<!--begin::Label-->
													<span class="badge badge-light fs-8">Dec 10</span>
													<!--end::Label-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Items-->
											<!--begin::View more-->
											<div class="py-3 text-center border-top">
												<a href="../../demo1/dist/pages/user-profile/activity.html"
													class="btn btn-color-gray-600 btn-active-color-primary">View All
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-5">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="18" y="13" width="13" height="2"
																rx="1" transform="rotate(-180 18 13)"
																fill="currentColor" />
															<path
																d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon--></a>
											</div>
											<!--end::View more-->
										</div>
										<!--end::Tab panel-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::Notifications-->

							<!--begin::Quick links-->
						 
							<!--end::Quick links-->
							<!--begin::Theme mode-->
							<div class="app-navbar-item ms-1 ms-lg-3">
								<!--begin::Menu toggle-->
								<a href="#"
									class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
									data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
									data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
									<span class="svg-icon theme-light-show svg-icon-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z"
												fill="currentColor" />
											<path
												d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z"
												fill="currentColor" />
											<path
												d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z"
												fill="currentColor" />
											<path
												d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z"
												fill="currentColor" />
											<path
												d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z"
												fill="currentColor" />
											<path
												d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z"
												fill="currentColor" />
											<path
												d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z"
												fill="currentColor" />
											<path
												d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z"
												fill="currentColor" />
											<path
												d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
									<span class="svg-icon theme-dark-show svg-icon-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z"
												fill="currentColor" />
											<path
												d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z"
												fill="currentColor" />
											<path
												d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z"
												fill="currentColor" />
											<path
												d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
								<!--begin::Menu toggle-->
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-175px"
									data-kt-menu="true" data-kt-element="theme-mode-menu">
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
											data-kt-value="light">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z"
															fill="currentColor" />
														<path
															d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z"
															fill="currentColor" />
														<path
															d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z"
															fill="currentColor" />
														<path
															d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z"
															fill="currentColor" />
														<path
															d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z"
															fill="currentColor" />
														<path
															d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z"
															fill="currentColor" />
														<path
															d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z"
															fill="currentColor" />
														<path
															d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z"
															fill="currentColor" />
														<path
															d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Light</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
											data-kt-value="dark">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path
															d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z"
															fill="currentColor" />
														<path
															d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z"
															fill="currentColor" />
														<path
															d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z"
															fill="currentColor" />
														<path
															d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">Dark</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-3 my-0">
										<a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
											data-kt-value="system">
											<span class="menu-icon" data-kt-element="icon">
												<!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
												<span class="svg-icon svg-icon-3">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path fill-rule="evenodd" clip-rule="evenodd"
															d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
											<span class="menu-title">System</span>
										</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::Theme mode-->
							<!--begin::User menu-->
							<div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
								<!--begin::Menu wrapper-->
								<div class="cursor-pointer symbol symbol-35px symbol-md-40px"
									data-kt-menu-trigger="click" data-kt-menu-attach="parent"
									data-kt-menu-placement="bottom-end">
									<img src="assets/media/avatars/300-1.jpg" alt="user" />
								</div>
								<!--begin::User account menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
									data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bold d-flex align-items-center fs-5">Max Smith
													<span
														class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
												</div>
												<a href="#"
													class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My
											Profile</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo1/dist/apps/projects/list.html" class="menu-link px-5">
											<span class="menu-text">My Projects</span>
											<span class="menu-badge">
												<span
													class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
											</span>
										</a>
									</div>
									<!--end::Menu item-->
								 
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo1/dist/account/statements.html" class="menu-link px-5">My
											Statements</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
										data-kt-menu-placement="left-start">
										<a href="#" class="menu-link px-5">
											<span class="menu-title position-relative">Language
												<span
													class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
													<img class="w-15px h-15px rounded-1 ms-2"
														src="assets/media/flags/united-states.svg"
														alt="" /></span></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/settings.html"
													class="menu-link d-flex px-5 active">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1"
															src="assets/media/flags/united-states.svg" alt="" />
													</span>English</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/settings.html"
													class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/spain.svg"
															alt="" />
													</span>Spanish</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/settings.html"
													class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/germany.svg"
															alt="" />
													</span>German</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/settings.html"
													class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/japan.svg"
															alt="" />
													</span>Japanese</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../../demo1/dist/account/settings.html"
													class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="assets/media/flags/france.svg"
															alt="" />
													</span>French</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5 my-1">
										<a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account
											Settings</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../../demo1/dist/authentication/flows/basic/sign-in.html"
											class="menu-link px-5">Sign Out</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::User account menu-->
								<!--end::Menu wrapper-->
							</div>
							<!--end::User menu-->
							<!--begin::Header menu toggle-->
							<div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
								<div class="btn btn-icon btn-active-color-primary w-35px h-35px"
									id="kt_app_header_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
									<span class="svg-icon svg-icon-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
											xmlns="http://www.w3.org/2000/svg">
											<path
												d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z"
												fill="currentColor" />
											<path opacity="0.3"
												d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z"
												fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
							</div>
							<!--end::Header menu toggle-->
						</div>
						<!--end::Navbar-->
					</div>
					<!--end::Header wrapper-->
				</div>
				<!--end::Header container-->
			</div>
			<!--end::Header-->
			<!--begin::Wrapper-->
			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
					data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
					data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
					data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
					<!--begin::Logo-->
					<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
						<!--begin::Logo image-->
						<a href="/">
							<img alt="Logo" src="assets/logonew.svg" class="h-25px app-sidebar-logo-default" />
							<img alt="Logo" src="assets/logonew.svg" class="h-20px app-sidebar-logo-minimize" />
						</a>
						<!--end::Logo image-->
						<!--begin::Sidebar toggle-->
						<div id="kt_app_sidebar_toggle"
							class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
							data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
							data-kt-toggle-name="app-sidebar-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
							<span class="svg-icon svg-icon-2 rotate-180">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.5"
										d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
										fill="currentColor" />
									<path
										d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Sidebar toggle-->
					</div>
					<!--end::Logo-->
					<!--begin::sidebar menu-->
					<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
						<!--begin::Menu wrapper-->
						<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
							data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
							data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
							data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px"
							data-kt-scroll-save-state="true">
							<!--begin::Menu-->
							<div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
								data-kt-menu="true" data-kt-menu-expand="false">

								<!--begin:Menu item-->
								<div class="menu-item pt-5">
									<!--begin:Menu content-->
									<div class="menu-content">
										<span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
									</div>
									<!--end:Menu content-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div  class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<a class="menu-link" href="/">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
													viewBox="0 0 20 20">
													<path id="Vector"
														d="M0,20V6.667L10,0,20,6.667V20H12.5V12.222h-5V20Z"
														fill="#bfbfbf" />
												</svg>

											</span>
											<!--end::Svg Icon-->
										</span>

										<span class="menu-title">Home</span>
									</a>


								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<a class="menu-link" href="/categories">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="21.875" height="18.75"
													viewBox="0 0 21.875 18.75">
													<path id="Vector"
														d="M1.563,7.031h0ZM4.616.115a.781.781,0,0,1,.29.315l.563,1.133H8.594a.781.781,0,0,1,.781.781V7.813a.781.781,0,0,1-.781.781H.781A.781.781,0,0,1,0,7.813V.781A.781.781,0,0,1,.781,0H4.2a.781.781,0,0,1,.413.115ZM15.438,7.031h0ZM17.116.115a.781.781,0,0,1,.29.315l.563,1.133h3.125a.781.781,0,0,1,.781.781V7.813a.781.781,0,0,1-.781.781H13.281a.781.781,0,0,1-.781-.781V.781A.781.781,0,0,1,13.281,0H16.7a.781.781,0,0,1,.413.115ZM1.563,17.188h0Zm3.053-6.917a.781.781,0,0,1,.29.315l.563,1.133H8.594a.781.781,0,0,1,.781.781v5.469a.781.781,0,0,1-.781.781H.781A.781.781,0,0,1,0,17.969V10.938a.781.781,0,0,1,.781-.781H4.2a.781.781,0,0,1,.413.115Zm9.447,6.917h0Zm3.053-6.917a.781.781,0,0,1,.29.315l.563,1.133h3.125a.781.781,0,0,1,.781.781v5.469a.781.781,0,0,1-.781.781H13.281a.781.781,0,0,1-.781-.781V10.938a.781.781,0,0,1,.781-.781H16.7a.781.781,0,0,1,.413.115Z"
														transform="translate(0 0)" fill="#bfbfbf" />
												</svg>


											</span>
											<!--end::Svg Icon-->
										</span>

										<span class="menu-title">Categories</span>
									</a>


								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<a class="menu-link" href="/AddNote">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24">
													<path id="Vector"
														d="M13.5,6.75a6.75,6.75,0,1,1-1.977-4.773A6.75,6.75,0,0,1,13.5,6.75Zm-6-3a.75.75,0,0,0-1.5,0V6H3.75a.75.75,0,0,0,0,1.5H6V9.75a.75.75,0,0,0,1.5,0V7.5H9.75a.75.75,0,0,0,0-1.5H7.5ZM6.75,15A8.25,8.25,0,0,0,14.1,3h5.4a4.5,4.5,0,0,1,4.492,4.236L24,7.5v6H18l-.264.007a4.5,4.5,0,0,0-4.229,4.228L13.5,18v6h-6a4.5,4.5,0,0,1-4.492-4.236L3,19.5V14.1a8.205,8.205,0,0,0,3.75.9Zm17.1,0a3,3,0,0,1-.537.978l-.192.21L16.19,23.121a3,3,0,0,1-1.188.73L15,18l.007-.225a3,3,0,0,1,2.757-2.766L18,15Z"
														transform="translate(0 0)" fill="#bfbfbf" />
												</svg>




											</span>
											<!--end::Svg Icon-->
										</span>

										<span class="menu-title">Add Note</span>
									</a>


								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<a class="menu-link" href="/AddAFriend">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
											<span class="svg-icon svg-icon-2">
												<svg id="fa-solid:user-friends" xmlns="http://www.w3.org/2000/svg"
													width="25" height="20" viewBox="0 0 25 20">
													<rect id="fa-solid:user-friends-2" data-name="fa-solid:user-friends"
														width="25" height="20" fill="none" />
													<path id="Vector"
														d="M3.125,4.375A4.375,4.375,0,1,1,7.5,8.75,4.373,4.373,0,0,1,3.125,4.375ZM15,14.5v1.125A1.875,1.875,0,0,1,13.125,17.5H1.875A1.875,1.875,0,0,1,0,15.625V14.5A4.5,4.5,0,0,1,4.5,10h.324a6.04,6.04,0,0,0,5.352,0H10.5A4.5,4.5,0,0,1,15,14.5ZM15,5a3.75,3.75,0,1,1,3.75,3.75A3.751,3.751,0,0,1,15,5Zm10,9.375a1.875,1.875,0,0,1-1.875,1.875h-6.9c0-.082.023-.164.023-.25V14.5A5.717,5.717,0,0,0,14.7,10.6a4.339,4.339,0,0,1,2.176-.6h.148a4.926,4.926,0,0,0,3.453,0h.148A4.373,4.373,0,0,1,25,14.375Z"
														transform="translate(0 1.25)" fill="#bfbfbf" />
												</svg>



											</span>
											<!--end::Svg Icon-->
										</span>

										<span class="menu-title">Add Friends</span>
									</a>


								</div>
								<!--end:Menu item-->
						 
								<!--begin:Menu item-->
								<div class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<a class="menu-link" href="/Favorite">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="20" height="18"
													viewBox="0 0 20 18">
													<path id="Vector"
														d="M8.65,17.465l-1.725-1.6q-2.65-2.47-4.788-4.9A7.934,7.934,0,0,1,0,5.6a5.477,5.477,0,0,1,1.575-4A5.277,5.277,0,0,1,5.5,0,5.635,5.635,0,0,1,8,.572a5.959,5.959,0,0,1,2,1.566A5.976,5.976,0,0,1,12,.572,5.617,5.617,0,0,1,14.5,0a5.277,5.277,0,0,1,3.925,1.6A5.477,5.477,0,0,1,20,5.6a8.01,8.01,0,0,1-2.125,5.372,60.417,60.417,0,0,1-4.825,4.914l-1.7,1.578a1.972,1.972,0,0,1-2.7,0Z"
														fill="#bfbfbf" />
												</svg>



											</span>
											<!--end::Svg Icon-->
										</span>

										<span class="menu-title">Favorite</span>
									</a>


								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<a class="menu-link" href="/Trash">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="14.583" height="18.75"
													viewBox="0 0 14.583 18.75">
													<path id="Vector"
														d="M14.583,3.125H0V1.042H3.646L4.688,0H9.9l1.042,1.042h3.646M1.042,4.167h12.5v12.5a2.083,2.083,0,0,1-2.083,2.083H3.125a2.083,2.083,0,0,1-2.083-2.083Z"
														fill="#bfbfbf" />
												</svg>



											</span>
											<!--end::Svg Icon-->
										</span>

										<span class="menu-title">Trash</span>
									</a>


								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<a class="menu-link" href="/faq">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
											<span class="svg-icon svg-icon-2">
												<svg id="mdi:frequently-asked-questions"
													xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24">
													<rect id="mdi:frequently-asked-questions-2"
														data-name="mdi:frequently-asked-questions" width="24"
														height="24" fill="none" />
													<path id="Vector"
														d="M16,13H4L0,17V1A1,1,0,0,1,1,0H16a1,1,0,0,1,1,1V12a1,1,0,0,1-1,1Zm5-6V21l-4-4H6a1,1,0,0,1-1-1V15H19V6h1a1,1,0,0,1,1,1ZM6.19,2a3.515,3.515,0,0,0-2.11.59,2.063,2.063,0,0,0-.77,1.77l.01.03H5.25a.915.915,0,0,1,.28-.69,1,1,0,0,1,.66-.23,1.035,1.035,0,0,1,.75.28,1.056,1.056,0,0,1,.26.75,1.387,1.387,0,0,1-.23.82,1.818,1.818,0,0,1-.61.59,4.039,4.039,0,0,0-1.05.91A1.975,1.975,0,0,0,5,8H7a1.693,1.693,0,0,1,.13-.74,1.39,1.39,0,0,1,.51-.52,3.143,3.143,0,0,0,1.11-.93A2.133,2.133,0,0,0,9.19,4.5a2.251,2.251,0,0,0-.81-1.82A3.279,3.279,0,0,0,6.19,2ZM5,9v2H7V9Zm6,2h2V9H11Zm0-9V8h2V2Z"
														transform="translate(2 2)" fill="#bfbfbf" />
												</svg>




											</span>
											<!--end::Svg Icon-->
										</span>

										<span class="menu-title">Frequently ask...</span>
									</a>


								</div>
								<!--end:Menu item-->



							</div>
							<!--end::Menu-->
						</div>
						<!--end::Menu wrapper-->
					</div>
					<!--end::sidebar menu-->
					<!--begin::Footer-->
						<div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
						<a href="#"
							class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
							data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click">
							<span class="btn-label">Home</span>

						</a>
					</div>
					<!--end::Footer-->
				</div>
				<!--end::sidebar-->
				<!--begin::Main-->
				<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Account Overview</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Account</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
								 
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
                            <div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::FAQ card-->
									<div class="card">
										<!--begin::Body-->
										<div class="card-body p-lg-15">
											<!--begin::Classic content-->
											<div class="mb-13">
												<!--begin::Intro-->
												<div class="mb-15">
													<!--begin::Title-->
													<h4 class="fs-2x text-gray-800 w-bolder mb-6">Frequesntly Asked Questions</h4>
													<!--end::Title-->
													<!--begin::Text-->
													<p class="fw-semibold fs-4 text-gray-600 mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
													<!--end::Text-->
												</div>
												<!--end::Intro-->
												<!--begin::Row-->
												<div class="row mb-12">
													<!--begin::Col-->
													<div class="col-md-6 pe-md-10 mb-10 mb-md-0">
														<!--begin::Title-->
														<h2 class="text-gray-800 fw-bold mb-4">Buying Product</h2>
														<!--end::Title-->
														<!--begin::Accordion-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_1">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How does it work?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_4_1" class="collapse show fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_2">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Do I need a designer to use Admin Theme ?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_4_2" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_3">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What do I need to do to start selling?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_4_3" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_4_4">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How much does Extended license cost?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_4_4" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--end::Accordion-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 ps-md-10">
														<!--begin::Title-->
														<h2 class="text-gray-800 fw-bold mb-4">Installation</h2>
														<!--end::Title-->
														<!--begin::Accordion-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_1">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What platforms are compatible?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_5_1" class="collapse show fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_2">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How many people can it support?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_5_2" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_3">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How long is the warrianty?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_5_3" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_5_4">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How fast is the installation?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_5_4" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--end::Accordion-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
												<!--begin::Row-->
												<div class="row">
													<!--begin::Col-->
													<div class="col-md-6 pe-md-10 mb-10 mb-md-0">
														<!--begin::Title-->
														<h2 class="text-gray-800 w-bolder mb-4">User Roles</h2>
														<!--end::Title-->
														<!--begin::Accordion-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_1">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How does it work?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_6_1" class="collapse show fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_2">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Do I need a designer to use this Admin Theme?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_6_2" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_3">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What do I need to do to start selling?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_6_3" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_6_4">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How much does Extended license cost?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_6_4" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--end::Accordion-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-md-6 ps-md-10">
														<!--begin::Title-->
														<h2 class="text-gray-800 fw-bold mb-4">Reports Generation</h2>
														<!--end::Title-->
														<!--begin::Accordion-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_1">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">What platforms are compatible?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_7_1" class="collapse show fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_2">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How many people can it support?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_7_2" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_3">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How long is the warrianty?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_7_3" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_7_4">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"></rect>
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"></rect>
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"></rect>
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">How fast is the installation?</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_7_4" class="collapse fs-6 ms-1">
																<!--begin::Text-->
																<div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</div>
																<!--end::Text-->
															</div>
															<!--end::Content-->
														</div>
														<!--end::Section-->
														<!--end::Accordion-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Classic content-->
										 
										</div>
										<!--end::Body-->
									</div>
									<!--end::FAQ card-->
								</div>
								<!--end::Content container-->
							</div>
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
						<div id="kt_app_footer" class="app-footer">
							<!--begin::Footer container-->
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<!--begin::Copyright-->
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">2022©</span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
								</div>
								<!--end::Copyright-->
								<!--begin::Menu-->
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
								<!--end::Menu-->
							</div>
							<!--end::Footer container-->
						</div>
						<!--end::Footer-->
					</div>
				<!--end:::Main-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::App-->
	<!--begin::Drawers-->
 
	<!--end::Drawers-->
	<!--begin::Engage drawers-->


	<!--end::Engage drawers-->

	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
					fill="currentColor" />
				<path
					d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
					fill="currentColor" />
			</svg>
		</span>
		<!--end::Svg Icon-->
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
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
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
							<a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
						</div>
					</div>
					<!--end::Heading-->
					<!--begin::Plans-->
					<div class="d-flex flex-column">
						<!--begin::Nav group-->
						<div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
							<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
								data-kt-plan="month">Monthly</button>
							<button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
								data-kt-plan="annual">Annual</button>
						</div>
						<!--end::Nav group-->
						<!--begin::Row-->
						<div class="row mt-10">
							<!--begin::Col-->
							<div class="col-lg-6 mb-10 mb-lg-0">
								<!--begin::Tabs-->
								<div class="nav flex-column">
									<!--begin::Tab link-->
									<label
										class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
										data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div
												class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan"
													checked="checked" value="startup" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Startup
												</div>
												<div class="fw-semibold opacity-75">Best for startups</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="39"
												data-kt-plan-price-annual="399">39</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label
										class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
										data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div
												class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan"
													value="advanced" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Advanced
												</div>
												<div class="fw-semibold opacity-75">Best for 100+ team size</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="339"
												data-kt-plan-price-annual="3399">339</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label
										class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
										data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div
												class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan"
													value="enterprise" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Enterprise
													<span
														class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
												</div>
												<div class="fw-semibold opacity-75">Best value for 1000+ team</div>
											</div>
											<!--end::Info-->
										</div>
										<!--end::Description-->
										<!--begin::Price-->
										<div class="ms-5">
											<span class="mb-2">$</span>
											<span class="fs-3x fw-bold" data-kt-plan-price-month="999"
												data-kt-plan-price-annual="9999">999</span>
											<span class="fs-7 opacity-50">/
												<span data-kt-element="period">Mon</span></span>
										</div>
										<!--end::Price-->
									</label>
									<!--end::Tab link-->
									<!--begin::Tab link-->
									<label
										class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
										data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
										<!--end::Description-->
										<div class="d-flex align-items-center me-2">
											<!--begin::Radio-->
											<div
												class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
												<input class="form-check-input" type="radio" name="plan"
													value="custom" />
											</div>
											<!--end::Radio-->
											<!--begin::Info-->
											<div class="flex-grow-1">
												<div class="d-flex align-items-center fs-2 fw-bold flex-wrap">Custom
												</div>
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
											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 10+ team size and new
												startup</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
													Users</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
													Project Integrations</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Finance
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Accounting
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Network
													Platform</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud
													Space</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
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
											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 100+ team size and grown
												company</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
													Users</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
													Project Integrations</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Network
													Platform</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-muted flex-grow-1">Unlimited Cloud
													Space</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
												<span class="svg-icon svg-icon-1">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<rect x="7" y="15.3137" width="12" height="2" rx="1"
															transform="rotate(-45 7 15.3137)" fill="currentColor" />
														<rect x="8.41422" y="7" width="12" height="2" rx="1"
															transform="rotate(45 8.41422 7)" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
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
											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for 1000+ team and enterpise
											</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 10 Active
													Users</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Up to 30
													Project Integrations</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
													Platform</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud
													Space</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
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
											<h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>
											<div class="text-muted fw-semibold">Optimal for corporations</div>
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="pt-1">
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
													Users</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited
													Project Integrations</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Analytics
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Finance
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Accounting
													Module</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center mb-7">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Network
													Platform</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Item-->
											<!--begin::Item-->
											<div class="d-flex align-items-center">
												<span class="fw-semibold fs-5 text-gray-700 flex-grow-1">Unlimited Cloud
													Space</span>
												<!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-success">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
															fill="currentColor" />
														<path
															d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
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
						<button type="submit" class="btn btn-primary">Upgrade Plan</button>
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
	<!--begin::Modal - Create Project-->
	<div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
		<!--begin::Modal dialog-->
		<div class="modal-dialog modal-fullscreen p-9">
			<!--begin::Modal content-->
			<div class="modal-content modal-rounded">
				<!--begin::Modal header-->
				<div class="modal-header">
					<!--begin::Modal title-->
					<h2>Create Project</h2>
					<!--end::Modal title-->
					<!--begin::Close-->
					<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body scroll-y m-5">
					<!--begin::Stepper-->
					<div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Nav-->
							<div class="stepper-nav justify-content-center py-2">
								<!--begin::Step 1-->
								<div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Project Type</h3>
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Project Settings</h3>
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Budget</h3>
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Build A Team</h3>
								</div>
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Set First Target</h3>
								</div>
								<!--end::Step 5-->
								<!--begin::Step 6-->
								<div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Upload Files</h3>
								</div>
								<!--end::Step 6-->
								<!--begin::Step 7-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<h3 class="stepper-title">Completed</h3>
								</div>
								<!--end::Step 7-->
							</div>
							<!--end::Nav-->
							<!--begin::Form-->
							<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
								id="kt_modal_create_project_form" method="post">
								<!--begin::Type-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-7 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bold text-dark">Project Type</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check
												out
												<a href="#" class="link-primary fw-bold">FAQ Page</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-15" data-kt-buttons="true">
											<!--begin::Option-->
											<label
												class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6 mb-6 active">
												<!--begin::Input-->
												<input class="btn-check" type="radio" checked="checked"
													name="project_type" value="1" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="d-flex">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
													<span class="svg-icon svg-icon-3hx">
														<svg width="18" height="18" viewBox="0 0 18 18" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
																d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z"
																fill="currentColor" />
															<path
																d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z"
																fill="currentColor" />
															<rect x="7" y="6" width="4" height="4" rx="2"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="ms-4">
														<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Personal
															Project</span>
														<span class="fw-semibold fs-4 text-muted">If you need more info,
															please check it out</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
											<!--begin::Option-->
											<label
												class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6">
												<!--begin::Input-->
												<input class="btn-check" type="radio" name="project_type" value="2" />
												<!--end::Input-->
												<!--begin::Label-->
												<span class="d-flex">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
													<span class="svg-icon svg-icon-3hx">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
																d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z"
																fill="currentColor" />
															<path
																d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="ms-4">
														<span class="fs-3 fw-bold text-gray-900 mb-2 d-block">Team
															Project</span>
														<span class="fw-semibold fs-4 text-muted">Create corporate
															account to manage users</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
											</label>
											<!--end::Option-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="type-next">
												<span class="indicator-label">Project Settings</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Type-->
								<!--begin::Settings-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12">
											<!--begin::Title-->
											<h1 class="fw-bold text-dark">Project Settings</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Dropzone-->
											<div class="dropzone" id="kt_modal_create_project_settings_logo">
												<!--begin::Message-->
												<div class="dz-message needsclick">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
													<span class="svg-icon svg-icon-3hx svg-icon-primary">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
																d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
																fill="currentColor" />
															<path
																d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z"
																fill="currentColor" />
															<path
																d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
																fill="currentColor" />
															<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-4">
														<h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or
															click to upload.</h3>
														<span class="fw-semibold fs-4 text-muted">Upload up to 10
															files</span>
													</div>
													<!--end::Info-->
												</div>
											</div>
											<!--end::Dropzone-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="required fs-6 fw-semibold mb-2">Customer</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select class="form-select form-select-solid" data-control="select2"
												data-hide-search="true" data-placeholder="Select..."
												name="settings_customer">
												<option></option>
												<option value="1">Keenthemes</option>
												<option value="2">CRM App</option>
											</select>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
												<span class="required">Project Name</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Specify project name"></i>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												placeholder="Enter Project Name" value="StockPro Mobile App"
												name="settings_name" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="required fs-6 fw-semibold mb-2">Project Description</label>
											<!--end::Label-->
											<!--begin::Input-->
											<textarea class="form-control form-control-solid" rows="3"
												placeholder="Enter Project Description"
												name="settings_description">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="required fs-6 fw-semibold mb-2">Release Date</label>
											<!--end::Label-->
											<!--begin::Wrapper-->
											<div class="position-relative d-flex align-items-center">
												<!--begin::Icon-->
												<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
												<span class="svg-icon svg-icon-2 position-absolute mx-4">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3"
															d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
															fill="currentColor" />
														<path
															d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
															fill="currentColor" />
														<path
															d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Input-->
												<input class="form-control form-control-solid ps-12"
													placeholder="Pick date range" name="settings_release_date" />
												<!--end::Input-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-15">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="required fs-6 fw-semibold">Notifications</label>
													<div class="fs-7 fw-semibold text-muted">Allow Notifications by
														Phone or Email</div>
												</div>
												<!--end::Label-->
												<!--begin::Checkboxes-->
												<div class="d-flex">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid me-10">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="email" name="settings_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-semibold">Email</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="phone" checked="checked"
															name="settings_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-semibold">Phone</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Checkboxes-->
											</div>
											<!--begin::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="settings-previous">Project Type</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="settings-next">
												<span class="indicator-label">Budget</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Settings-->
								<!--begin::Budget-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bold text-dark">Budget</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
												<span class="required">Setup Budget</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
													data-bs-trigger="hover" data-bs-html="true"
													data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-semibold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bold mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
											</label>
											<!--end::Label-->
											<!--begin::Dialer-->
											<div class="position-relative w-lg-250px"
												id="kt_modal_create_project_budget_setup" data-kt-dialer="true"
												data-kt-dialer-min="50" data-kt-dialer-max="50000"
												data-kt-dialer-step="100" data-kt-dialer-prefix="$"
												data-kt-dialer-decimals="2">
												<!--begin::Decrease control-->
												<button type="button"
													class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0"
													data-kt-dialer-control="decrease">
													<!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20"
																rx="10" fill="currentColor" />
															<rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--end::Decrease control-->
												<!--begin::Input control-->
												<input type="text"
													class="form-control form-control-solid border-0 ps-12"
													data-kt-dialer-control="input" placeholder="Amount"
													name="budget_setup" readonly="readonly" value="$50" />
												<!--end::Input control-->
												<!--begin::Increase control-->
												<button type="button"
													class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0"
													data-kt-dialer-control="increase">
													<!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20"
																rx="10" fill="currentColor" />
															<rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
																transform="rotate(-90 10.8891 17.8033)"
																fill="currentColor" />
															<rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--end::Increase control-->
											</div>
											<!--end::Dialer-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Budget Usage</label>
											<!--end::Label-->
											<!--begin::Row-->
											<div class="row g-9" data-kt-buttons="true"
												data-kt-buttons-target="[data-kt-button='true']">
												<!--begin::Col-->
												<div class="col-md-6 col-lg-12 col-xxl-6">
													<!--begin::Option-->
													<label
														class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
														data-kt-button="true">
														<!--begin::Radio-->
														<span
															class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio"
																name="budget_usage" value="1" checked="checked" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span
																class="fs-4 fw-bold text-gray-800 mb-2 d-block">Precise
																Usage</span>
															<span class="fw-semibold fs-7 text-gray-600">Withdraw money
																to your bank account per transaction under $50,000
																budget</span>
														</span>
														<!--end::Info-->
													</label>
													<!--end::Option-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-md-6 col-lg-12 col-xxl-6">
													<!--begin::Option-->
													<label
														class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
														data-kt-button="true">
														<!--begin::Radio-->
														<span
															class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
															<input class="form-check-input" type="radio"
																name="budget_usage" value="2" />
														</span>
														<!--end::Radio-->
														<!--begin::Info-->
														<span class="ms-5">
															<span
																class="fs-4 fw-bold text-gray-800 mb-2 d-block">Extreme
																Usage</span>
															<span class="fw-semibold fs-7 text-gray-600">Withdraw money
																to your bank account per transaction under $50,000
																budget</span>
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
										<div class="fv-row mb-15">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
													<div class="fs-7 fw-semibold text-muted">If you need more info,
														please check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label
													class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
														name="budget_allow" checked="checked" />
													<span class="form-check-label fw-semibold text-muted">Allowed</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="budget-previous">Project Settings</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="budget-next">
												<span class="indicator-label">Build Team</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Budget-->
								<!--begin::Team-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12">
											<!--begin::Title-->
											<h1 class="fw-bold text-dark">Build a Team</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="mb-8">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Invite Teammates</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-solid"
												placeholder="Add project memnbers by name or email.."
												name="invite_teammates" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-8">
											<!--begin::Label-->
											<div class="fs-6 fw-semibold mb-2">Team Members</div>
											<!--end::Label-->
											<!--begin::Users-->
											<div class="mh-300px scroll-y me-n7 pe-7">
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
																Smith</a>
															<div class="fw-semibold text-muted">smith@kpmg.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
																Macy</a>
															<div class="fw-semibold text-muted">melody@altbox.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
																Smith</a>
															<div class="fw-semibold text-muted">max@kt.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
																Bean</a>
															<div class="fw-semibold text-muted">sean@dellito.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
																Cox</a>
															<div class="fw-semibold text-muted">brian@exchange.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
																Collins</a>
															<div class="fw-semibold text-muted">mik@pex.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
																Mitcham</a>
															<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
																Wild</a>
															<div class="fw-semibold text-muted">olivia@corpmail.com
															</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
																Owen</a>
															<div class="fw-semibold text-muted">owen.neil@gmail.com
															</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
																Wilson</a>
															<div class="fw-semibold text-muted">dam@consilting.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
																Bold</a>
															<div class="fw-semibold text-muted">emma@intenso.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
																Crown</a>
															<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-info text-info fw-semibold">A</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
																Doe</a>
															<div class="fw-semibold text-muted">robert@benko.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
																Miller</a>
															<div class="fw-semibold text-muted">miller@mapple.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2">Owner</option>
															<option value="3" selected="selected">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<span
																class="symbol-label bg-light-success text-success fw-semibold">L</span>
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
																Kunic</a>
															<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1">Guest</option>
															<option value="2" selected="selected">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div
													class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
																Wilder</a>
															<div class="fw-semibold text-muted">ethan@loop.com.au</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
															<option value="1" selected="selected">Guest</option>
															<option value="2">Owner</option>
															<option value="3">Can Edit</option>
														</select>
													</div>
													<!--end::Access menu-->
												</div>
												<!--end::User-->
												<!--begin::User-->
												<div class="d-flex flex-stack py-4">
													<!--begin::Details-->
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px symbol-circle">
															<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-5">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
																Wilson</a>
															<div class="fw-semibold text-muted">dam@consilting.com</div>
														</div>
														<!--end::Details-->
													</div>
													<!--end::Details-->
													<!--begin::Access menu-->
													<div class="ms-2 w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true">
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
										</div>
										<!--end::Input group-->
										<!--begin::Notice-->
										<div class="d-flex flex-stack mb-15">
											<!--begin::Label-->
											<div class="me-5 fw-semibold">
												<label class="fs-6">Adding Users by Team Members</label>
												<div class="fs-7 text-muted">If you need more info, please check budget
													planning</div>
											</div>
											<!--end::Label-->
											<!--begin::Switch-->
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value=""
													checked="checked" />
											</label>
											<!--end::Switch-->
										</div>
										<!--end::Notice-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="team-previous">Budget</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="team-next">
												<span class="indicator-label">Set Target</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Team-->
								<!--begin::Targets-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12">
											<!--begin::Title-->
											<h1 class="fw-bold text-dark">Set First Target</h1>
											<!--end::Title-->
											<!--begin::Title-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Title-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<label class="fs-6 fw-semibold mb-2">Target Title</label>
											<input type="text" class="form-control form-control-solid"
												placeholder="Enter Target Title" name="Project Launch" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row g-9 mb-8">
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-semibold mb-2">Assign</label>
												<select class="form-select form-select-solid" data-control="select2"
													data-hide-search="true" data-placeholder="Select a Team Member"
													name="target_assign">
													<option></option>
													<option value="1">Karina Clark</option>
													<option value="2" selected="selected">Robert Doe</option>
													<option value="3">Niel Owen</option>
													<option value="4">Olivia Wild</option>
													<option value="5">Sean Bean</option>
												</select>
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-md-6 fv-row">
												<label class="required fs-6 fw-semibold mb-2">Due Date</label>
												<div class="position-relative d-flex align-items-center">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
													<span class="svg-icon svg-icon-2 position-absolute mx-4">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
																d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
																fill="currentColor" />
															<path
																d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
																fill="currentColor" />
															<path
																d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Datepicker-->
													<input class="form-control form-control-solid ps-12"
														placeholder="Pick date range" name="target_due_date" />
													<!--end::Datepicker-->
												</div>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<label class="fs-6 fw-semibold mb-2">Target Details</label>
											<textarea class="form-control form-control-solid" rows="2"
												name="target_details"
												placeholder="Type Target Details">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<label class="required fs-6 fw-semibold mb-2">Tags</label>
											<input class="form-control form-control-solid" value="Important, Urgent"
												name="target_tags" />
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
													<div class="fs-7 fw-semibold text-muted">If you need more info,
														please check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label
													class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
														name="target_allow" checked="checked" />
													<span class="form-check-label fw-semibold text-muted">Allowed</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row mb-15">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-semibold">Notifications</label>
													<div class="fs-7 fw-semibold text-muted">Allow Notifications by
														Phone or Email</div>
												</div>
												<!--end::Label-->
												<!--begin::Checkboxes-->
												<div class="d-flex">
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid me-10">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="email" name="target_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-semibold">Email</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
													<!--begin::Checkbox-->
													<label class="form-check form-check-custom form-check-solid">
														<!--begin::Input-->
														<input class="form-check-input h-20px w-20px" type="checkbox"
															value="phone" checked="checked"
															name="target_notifications[]" />
														<!--end::Input-->
														<!--begin::Label-->
														<span class="form-check-label fw-semibold">Phone</span>
														<!--end::Label-->
													</label>
													<!--end::Checkbox-->
												</div>
												<!--end::Checkboxes-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="targets-previous">Build a Team</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="targets-next">
												<span class="indicator-label">Upload Files</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Targets-->
								<!--begin::Files-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h1 class="fw-bold text-dark">Upload Files</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check
												<a href="#" class="link-primary">Project Guidelines</a>
											</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Dropzone-->
											<div class="dropzone" id="kt_modal_create_project_files_upload">
												<!--begin::Message-->
												<div class="dz-message needsclick">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
													<span class="svg-icon svg-icon-3hx svg-icon-primary">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3"
																d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
																fill="currentColor" />
															<path
																d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z"
																fill="currentColor" />
															<path
																d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
																fill="currentColor" />
															<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
																fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Info-->
													<div class="ms-4">
														<h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop files here or
															click to upload.</h3>
														<span class="fw-semibold fs-4 text-muted">Upload up to 10
															files</span>
													</div>
													<!--end::Info-->
												</div>
											</div>
											<!--end::Dropzone-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-8">
											<!--begin::Label-->
											<label class="fs-6 fw-semibold mb-2">Uploaded File</label>
											<!--End::Label-->
											<!--begin::Files-->
											<div class="mh-300px scroll-y me-n7 pe-7">
												<!--begin::File-->
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/pdf.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Avionica
																Technical Requirements</a>
															<div class="fw-semibold text-muted">230kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
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
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/doc.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">9
																Degree CURD draftplan</a>
															<div class="fw-semibold text-muted">3.6mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
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
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/css.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">User
																CRUD Styles</a>
															<div class="fw-semibold text-muted">85kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
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
												<div
													class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
													<div class="d-flex align-items-center">
														<!--begin::Avatar-->
														<div class="symbol symbol-35px">
															<img src="assets/media/svg/files/ai.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design
																Initial Logo</a>
															<div class="fw-semibold text-muted">40kb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
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
															<img src="assets/media/svg/files/tif.svg" alt="icon" />
														</div>
														<!--end::Avatar-->
														<!--begin::Details-->
														<div class="ms-6">
															<a href="#"
																class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Tower
																Hill Bilboard</a>
															<div class="fw-semibold text-muted">27mb</div>
														</div>
														<!--end::Details-->
													</div>
													<!--begin::Menu-->
													<div class="min-w-100px">
														<select class="form-select form-select-solid form-select-sm"
															data-control="select2" data-hide-search="true"
															data-placeholder="Edit">
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
										<!--begin::Input group-->
										<div class="fv-row mb-8">
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack">
												<!--begin::Label-->
												<div class="me-5">
													<label class="fs-6 fw-semibold">Allow Changes in Budget</label>
													<div class="fs-7 fw-semibold text-muted">If you need more info,
														please check budget planning</div>
												</div>
												<!--end::Label-->
												<!--begin::Switch-->
												<label
													class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="1"
														name="target_allow" checked="checked" />
													<span class="form-check-label fw-semibold text-muted">Allowed</span>
												</label>
												<!--end::Switch-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex flex-stack">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="files-previous">Set First Target</button>
											<button type="button" class="btn btn-lg btn-primary"
												data-kt-element="files-next">
												<span class="indicator-label">Complete</span>
												<span class="indicator-progress">Please wait...
													<span
														class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Files-->
								<!--begin::Complete-->
								<div data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-12 text-center">
											<!--begin::Title-->
											<h1 class="fw-bold text-dark">Project Created!</h1>
											<!--end::Title-->
											<!--begin::Description-->
											<div class="text-muted fw-semibold fs-4">If you need more info, please check
												how to create project</div>
											<!--end::Description-->
										</div>
										<!--end::Heading-->
										<!--begin::Actions-->
										<div class="d-flex flex-center pb-20">
											<button type="button" class="btn btn-lg btn-light me-3"
												data-kt-element="complete-start">Create New Project</button>
											<a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
												title="Coming Soon">View Project</a>
										</div>
										<!--end::Actions-->
										<!--begin::Illustration-->
										<div class="text-center px-4">
											<img src="assets/media/illustrations/sketchy-1/9.png" alt=""
												class="mww-100 mh-350px" />
										</div>
										<!--end::Illustration-->
									</div>
								</div>
								<!--end::Complete-->
							</form>
							<!--end::Form-->
						</div>
						<!--begin::Container-->
					</div>
					<!--end::Stepper-->
				</div>
				<!--end::Modal body-->
			</div>
			<!--end::Modal content-->
		</div>
		<!--end::Modal dialog-->
	</div>
	<!--end::Modal - Create Project-->
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
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
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
						<form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
							id="kt_modal_create_campaign_stepper_form">
							<!--begin::Step 1-->
							<div class="current" data-kt-stepper-element="content">
								<!--begin::Wrapper-->
								<div class="w-100">
									<!--begin::Heading-->
									<div class="pb-10 pb-lg-15">
										<!--begin::Title-->
										<h2 class="fw-bold d-flex align-items-center text-dark">Setup Campaign Details
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Campaign name will be used as reference within your campaign reports"></i>
										</h2>
										<!--end::Title-->
										<!--begin::Notice-->
										<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">Help Page</a>.
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="mb-10 fv-row">
										<!--begin::Label-->
										<label class="required form-label mb-3">Campaign Name</label>
										<!--end::Label-->
										<!--begin::Input-->
										<input type="text" class="form-control form-control-lg form-control-solid"
											name="campaign_name" placeholder="" value="" />
										<!--end::Input-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="d-block fw-semibold fs-6 mb-5">
											<span class="required">Company Logo</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="E.g. Select a logo to represent the company that's running the campaign."></i>
										</label>
										<!--end::Label-->
										<!--begin::Image input placeholder-->
										<style>
											.image-input-placeholder {
												background-image: url('assets/media/svg/files/blank-image.svg');
											}

											[data-theme="dark"] .image-input-placeholder {
												background-image: url('assets/media/svg/files/blank-image-dark.svg');
											}
										</style>
										<!--end::Image input placeholder-->
										<!--begin::Image input-->
										<div class="image-input image-input-empty image-input-outline image-input-placeholder"
											data-kt-image-input="true">
											<!--begin::Preview existing avatar-->
											<div class="image-input-wrapper w-125px h-125px"></div>
											<!--end::Preview existing avatar-->
											<!--begin::Label-->
											<label
												class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
												data-kt-image-input-action="change" data-bs-toggle="tooltip"
												title="Change avatar">
												<i class="bi bi-pencil-fill fs-7"></i>
												<!--begin::Inputs-->
												<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
												<input type="hidden" name="avatar_remove" />
												<!--end::Inputs-->
											</label>
											<!--end::Label-->
											<!--begin::Cancel-->
											<span
												class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
												data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
												title="Cancel avatar">
												<i class="bi bi-x fs-2"></i>
											</span>
											<!--end::Cancel-->
											<!--begin::Remove-->
											<span
												class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
												data-kt-image-input-action="remove" data-bs-toggle="tooltip"
												title="Remove avatar">
												<i class="bi bi-x fs-2"></i>
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
												<input class="form-check-input me-3" name="user_role" type="radio"
													value="0" id="kt_modal_update_role_option_0" checked='checked' />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_role_option_0">
													<div class="fw-bold text-gray-800">Get more visitors</div>
													<div class="text-gray-600">Increase impression traffic onto the
														platform</div>
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
												<input class="form-check-input me-3" name="user_role" type="radio"
													value="1" id="kt_modal_update_role_option_1" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_role_option_1">
													<div class="fw-bold text-gray-800">Get more messages on chat</div>
													<div class="text-gray-600">Increase community interaction and
														communication</div>
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
												<input class="form-check-input me-3" name="user_role" type="radio"
													value="2" id="kt_modal_update_role_option_2" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_role_option_2">
													<div class="fw-bold text-gray-800">Get more calls</div>
													<div class="text-gray-600">Boost telecommunication feedback to
														provide precise and accurate information</div>
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
												<input class="form-check-input me-3" name="user_role" type="radio"
													value="3" id="kt_modal_update_role_option_3" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_role_option_3">
													<div class="fw-bold text-gray-800">Get more likes</div>
													<div class="text-gray-600">Increase positive interactivity on social
														media platforms</div>
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
												<input class="form-check-input me-3" name="user_role" type="radio"
													value="4" id="kt_modal_update_role_option_4" />
												<!--end::Input-->
												<!--begin::Label-->
												<label class="form-check-label" for="kt_modal_update_role_option_4">
													<div class="fw-bold text-gray-800">Lead generation</div>
													<div class="text-gray-600">Collect contact information for potential
														customers</div>
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
										<h1 class="fw-bold text-dark">Upload Files</h1>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-4">If you need more info, please check
											<a href="#" class="link-primary">Campaign Guidelines</a>
										</div>
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
												<!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
												<span class="svg-icon svg-icon-3hx svg-icon-primary">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<path opacity="0.3"
															d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
															fill="currentColor" />
														<path
															d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z"
															fill="currentColor" />
														<path
															d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
															fill="currentColor" />
														<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<!--end::Icon-->
												<!--begin::Info-->
												<div class="ms-4">
													<h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files
														here or click to upload.</h3>
													<span class="fw-semibold fs-4 text-muted">Upload up to 10
														files</span>
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
											<div
												class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px">
														<img src="assets/media/svg/files/pdf.svg" alt="icon" />
													</div>
													<!--end::Avatar-->
													<!--begin::Details-->
													<div class="ms-6">
														<a href="#"
															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product
															Specifications</a>
														<div class="fw-semibold text-muted">230kb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm"
														data-control="select2" data-hide-search="true"
														data-placeholder="Edit">
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
											<div
												class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px">
														<img src="assets/media/svg/files/tif.svg" alt="icon" />
													</div>
													<!--end::Avatar-->
													<!--begin::Details-->
													<div class="ms-6">
														<a href="#"
															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
															Creative Poster</a>
														<div class="fw-semibold text-muted">2.4mb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm"
														data-control="select2" data-hide-search="true"
														data-placeholder="Edit">
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
											<div
												class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px">
														<img src="assets/media/svg/files/folder-document.svg"
															alt="icon" />
													</div>
													<!--end::Avatar-->
													<!--begin::Details-->
													<div class="ms-6">
														<a href="#"
															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
															Landing Page Source</a>
														<div class="fw-semibold text-muted">1.12mb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm"
														data-control="select2" data-hide-search="true"
														data-placeholder="Edit">
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
											<div
												class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px">
														<img src="assets/media/svg/files/css.svg" alt="icon" />
													</div>
													<!--end::Avatar-->
													<!--begin::Details-->
													<div class="ms-6">
														<a href="#"
															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing
															Page Styling</a>
														<div class="fw-semibold text-muted">85kb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm"
														data-control="select2" data-hide-search="true"
														data-placeholder="Edit">
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
											<div
												class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
												<div class="d-flex align-items-center">
													<!--begin::Avatar-->
													<div class="symbol symbol-35px">
														<img src="assets/media/svg/files/ai.svg" alt="icon" />
													</div>
													<!--end::Avatar-->
													<!--begin::Details-->
													<div class="ms-6">
														<a href="#"
															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design
															Source Files</a>
														<div class="fw-semibold text-muted">48mb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm"
														data-control="select2" data-hide-search="true"
														data-placeholder="Edit">
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
														<a href="#"
															class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
															Plan Document</a>
														<div class="fw-semibold text-muted">27kb</div>
													</div>
													<!--end::Details-->
												</div>
												<!--begin::Menu-->
												<div class="min-w-100px">
													<select class="form-select form-select-solid form-select-sm"
														data-control="select2" data-hide-search="true"
														data-placeholder="Edit">
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
										<h1 class="fw-bold text-dark">Configure Audiences</h1>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-4">If you need more info, please check
											<a href="#" class="link-primary">Campaign Guidelines</a>
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Gender
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Show your ads to either men or women, or select 'All' for both"></i></label>
										<!--End::Label-->
										<!--begin::Row-->
										<div class="row g-9" data-kt-buttons="true"
											data-kt-buttons-target="[data-kt-button='true']">
											<!--begin::Col-->
											<div class="col">
												<!--begin::Option-->
												<label
													class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
													data-kt-button="true">
													<!--begin::Radio-->
													<span
														class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
														<input class="form-check-input" type="radio"
															name="campaign_gender" value="1" checked="checked" />
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
												<label
													class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
													data-kt-button="true">
													<!--begin::Radio-->
													<span
														class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
														<input class="form-check-input" type="radio"
															name="campaign_gender" value="2" />
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
												<label
													class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
													data-kt-button="true">
													<!--begin::Radio-->
													<span
														class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
														<input class="form-check-input" type="radio"
															name="campaign_gender" value="3" />
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
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Select the minimum and maximum age of the people who will find your ad relevant."></i></label>
										<!--End::Label-->
										<!--begin::Slider-->
										<div class="d-flex flex-stack">
											<div id="kt_modal_create_campaign_age_min"
												class="fs-7 fw-semibold text-muted"></div>
											<div id="kt_modal_create_campaign_age_slider"
												class="noUi-sm w-100 ms-5 me-8"></div>
											<div id="kt_modal_create_campaign_age_max"
												class="fs-7 fw-semibold text-muted"></div>
										</div>
										<!--end::Slider-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Location
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Enter one or more location points for more specific targeting."></i></label>
										<!--End::Label-->
										<!--begin::Tagify-->
										<input class="form-control d-flex align-items-center" value=""
											id="kt_modal_create_campaign_location" />
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
										<h1 class="fw-bold text-dark">Budget Estimates</h1>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-4">If you need more info, please check
											<a href="#" class="link-primary">Campaign Guidelines</a>
										</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Campaign Duration
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Choose how long you want your ad to run for"></i></label>
										<!--end::Label-->
										<!--begin::Duration option-->
										<div class="d-flex gap-9 mb-7">
											<!--begin::Button-->
											<button type="button"
												class="btn btn-outline btn-outline-dashed btn-active-light-primary active"
												id="kt_modal_create_campaign_duration_all">Continuous duration
												<br />
												<span class="fs-7">Your ad will run continuously for a daily
													budget.</span></button>
											<!--end::Button-->
											<!--begin::Button-->
											<button type="button"
												class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default"
												id="kt_modal_create_campaign_duration_fixed">Fixed duration
												<br />
												<span class="fs-7">Your ad will run on the specified dates
													only.</span></button>
											<!--end::Button-->
										</div>
										<!--end::Duration option-->
										<!--begin::Datepicker-->
										<input class="form-control form-control-solid d-none"
											placeholder="Pick date &amp; time"
											id="kt_modal_create_campaign_datepicker" />
										<!--end::Datepicker-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="fv-row mb-10">
										<!--begin::Label-->
										<label class="fs-6 fw-semibold mb-2">Daily Budget
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
												title="Choose the budget allocated for each day. Higher budget will generate better results"></i></label>
										<!--end::Label-->
										<!--begin::Slider-->
										<div class="d-flex flex-column text-center">
											<div class="d-flex align-items-start justify-content-center mb-7">
												<span class="fw-bold fs-4 mt-1 me-2">$</span>
												<span class="fw-bold fs-3x"
													id="kt_modal_create_campaign_budget_label"></span>
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
										<h1 class="fw-bold text-dark">Campaign Created!</h1>
										<!--end::Title-->
										<!--begin::Description-->
										<div class="fw-semibold text-muted fs-4">You will receive an email with with the
											summary of your newly created campaign!</div>
										<!--end::Description-->
									</div>
									<!--end::Heading-->
									<!--begin::Actions-->
									<div class="d-flex flex-center pb-20">
										<button id="kt_modal_create_campaign_create_new" type="button"
											class="btn btn-lg btn-light me-3" data-kt-element="complete-start">Create
											New Campaign</button>
										<a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
											title="Coming Soon">View Campaign</a>
									</div>
									<!--end::Actions-->
									<!--begin::Illustration-->
									<div class="text-center px-4">
										<img src="assets/media/illustrations/sketchy-1/9.png" alt=""
											class="mww-100 mh-350px" />
									</div>
									<!--end::Illustration-->
								</div>
							</div>
							<!--end::Step 5-->
							<!--begin::Actions-->
							<div class="d-flex flex-stack pt-10">
								<!--begin::Wrapper-->
								<div class="me-2">
									<button type="button" class="btn btn-lg btn-light-primary me-3"
										data-kt-stepper-action="previous">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
										<span class="svg-icon svg-icon-3 me-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
													fill="currentColor" />
												<path
													d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->Back</button>
								</div>
								<!--end::Wrapper-->
								<!--begin::Wrapper-->
								<div>
									<button type="button" class="btn btn-lg btn-primary"
										data-kt-stepper-action="submit">
										<span class="indicator-label">Submit
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-3 ms-2 me-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
														transform="rotate(-180 18 13)" fill="currentColor" />
													<path
														d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
														fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></span>
										<span class="indicator-progress">Please wait...
											<span
												class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<button type="button" class="btn btn-lg btn-primary"
										data-kt-stepper-action="next">Continue
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
										<span class="svg-icon svg-icon-3 ms-1 me-0">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
												xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
													transform="rotate(-180 18 13)" fill="currentColor" />
												<path
													d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
													fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon--></button>
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
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
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
								<a href="#" class="fw-bold link-primary">Bidding Guidelines</a>.
							</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Input group-->
						<div class="d-flex flex-column mb-8 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Bid Amount</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
									title="Specify the bid amount to place in."></i>
							</label>
							<!--end::Label-->
							<!--begin::Bid options-->
							<div class="d-flex flex-stack gap-5 mb-3">
								<button type="button" class="btn btn-light-primary w-100"
									data-kt-modal-bidding="option">10</button>
								<button type="button" class="btn btn-light-primary w-100"
									data-kt-modal-bidding="option">50</button>
								<button type="button" class="btn btn-light-primary w-100"
									data-kt-modal-bidding="option">100</button>
							</div>
							<!--begin::Bid options-->
							<input type="text" class="form-control form-control-solid" placeholder="Enter Bid Amount"
								name="bid_amount" />
						</div>
						<!--end::Input group-->
						<!--begin::Input group-->
						<div class="fv-row mb-8">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
								<span class="required">Currency Type</span>
								<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
									title="Select the currency type."></i>
							</label>
							<!--end::Label-->
							<!--begin::Select2-->
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
								data-placeholder="Select a Currency Type" name="currency_type">
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
								<select name="currency_dollar" aria-label="Select a Currency"
									data-placeholder="Select a currency.."
									class="form-select form-select-solid form-select-lg">
									<option data-kt-bidding-modal-option-icon="flags/united-states.svg" value="USD"
										selected="selected">
										<b>USD</b>&#160;-&#160;USA dollar
									</option>
									<option data-kt-bidding-modal-option-icon="flags/united-kingdom.svg" value="GBP">
										<b>GBP</b>&#160;-&#160;British pound
									</option>
									<option data-kt-bidding-modal-option-icon="flags/australia.svg" value="AUD">
										<b>AUD</b>&#160;-&#160;Australian dollar
									</option>
									<option data-kt-bidding-modal-option-icon="flags/japan.svg" value="JPY">
										<b>JPY</b>&#160;-&#160;Japanese yen
									</option>
									<option data-kt-bidding-modal-option-icon="flags/sweden.svg" value="SEK">
										<b>SEK</b>&#160;-&#160;Swedish krona
									</option>
									<option data-kt-bidding-modal-option-icon="flags/canada.svg" value="CAD">
										<b>CAD</b>&#160;-&#160;Canadian dollar
									</option>
									<option data-kt-bidding-modal-option-icon="flags/switzerland.svg" value="CHF">
										<b>CHF</b>&#160;-&#160;Swiss franc
									</option>
								</select>
								<!--end::Select2-->
							</div>
							<!--end::Dollar type-->
							<!--begin::Crypto type-->
							<div class="d-none" data-kt-modal-bidding-type="crypto">
								<!--begin::Select2-->
								<select name="currency_crypto" aria-label="Select a Coin"
									data-placeholder="Select a currency.."
									class="form-select form-select-solid form-select-lg">
									<option data-kt-bidding-modal-option-icon="svg/coins/bitcoin.svg" value="1"
										selected="selected">Bitcoin</option>
									<option data-kt-bidding-modal-option-icon="svg/coins/binance.svg" value="2">Binance
									</option>
									<option data-kt-bidding-modal-option-icon="svg/coins/chainlink.svg" value="3">
										Chainlink</option>
									<option data-kt-bidding-modal-option-icon="svg/coins/coin.svg" value="4">Coin
									</option>
									<option data-kt-bidding-modal-option-icon="svg/coins/ethereum.svg" value="5">
										Ethereum</option>
									<option data-kt-bidding-modal-option-icon="svg/coins/filecoin.svg" value="6">
										Filecoin</option>
								</select>
								<!--end::Select2-->
							</div>
							<!--end::Crypto type-->
						</div>
						<!--end::Input group-->
						<!--begin::Notice-->
						<!--begin::Notice-->
						<div
							class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
							<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.3"
										d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z"
										fill="currentColor" />
									<path opacity="0.3"
										d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z"
										fill="currentColor" />
									<path
										d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-grow-1">
								<!--begin::Content-->
								<div class="fw-semibold">
									<h4 class="text-gray-900 fw-bold">Top up funds</h4>
									<div class="fs-6 text-gray-700">Not enough funds in your wallet?
										<a href="../../demo1/dist/utilities/modals/wizards/top-up-wallet.html"
											class="text-bolder">Top up wallet</a>.
									</div>
								</div>
								<!--end::Content-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Notice-->
						<!--end::Notice-->
						<!--begin::Actions-->
						<div class="text-center">
							<button type="reset" class="btn btn-light me-3"
								data-kt-modal-action-type="cancel">Cancel</button>
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
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
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
					<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
						data-kt-search-enter="enter" data-kt-search-layout="inline">
						<!--begin::Form-->
						<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
							<!--begin::Hidden input(Added to disable form autocomplete)-->
							<input type="hidden" />
							<!--end::Hidden input-->
							<!--begin::Icon-->
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span
								class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
										transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path
										d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
										fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<!--end::Icon-->
							<!--begin::Input-->
							<input type="text" class="form-control form-control-lg form-control-solid px-15"
								name="search" value="" placeholder="Search by username, full name or email..."
								data-kt-search-element="input" />
							<!--end::Input-->
							<!--begin::Spinner-->
							<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
								data-kt-search-element="spinner">
								<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
							</span>
							<!--end::Spinner-->
							<!--begin::Reset-->
							<span
								class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
								data-kt-search-element="clear">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
											transform="rotate(-45 6 17.3137)" fill="currentColor" />
										<rect x="7.41422" y="6" width="16" height="2" rx="1"
											transform="rotate(45 7.41422 6)" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
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
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
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
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
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
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
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
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
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
									<a href="#"
										class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='0']"
													value="0" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
													Smith</a>
												<div class="fw-semibold text-muted">smith@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='1']"
													value="1" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
													Macy</a>
												<div class="fw-semibold text-muted">melody@altbox.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='2']"
													value="2" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
													Smith</a>
												<div class="fw-semibold text-muted">max@kt.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='3']"
													value="3" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
													Bean</a>
												<div class="fw-semibold text-muted">sean@dellito.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='4']"
													value="4" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
													Cox</a>
												<div class="fw-semibold text-muted">brian@exchange.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='5']"
													value="5" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
													Collins</a>
												<div class="fw-semibold text-muted">mik@pex.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='6']"
													value="6" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
													Mitcham</a>
												<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='7']"
													value="7" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
													Wild</a>
												<div class="fw-semibold text-muted">olivia@corpmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='8']"
													value="8" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
													Owen</a>
												<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='9']"
													value="9" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
													Wilson</a>
												<div class="fw-semibold text-muted">dam@consilting.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='10']"
													value="10" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
													Bold</a>
												<div class="fw-semibold text-muted">emma@intenso.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='11']"
													value="11" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
													Crown</a>
												<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='12']"
													value="12" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
													Doe</a>
												<div class="fw-semibold text-muted">robert@benko.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='13']"
													value="13" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
													Miller</a>
												<div class="fw-semibold text-muted">miller@mapple.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='14']"
													value="14" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<span
													class="symbol-label bg-light-success text-success fw-semibold">L</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
													Kunic</a>
												<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='15']"
													value="15" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
													Wilder</a>
												<div class="fw-semibold text-muted">ethan@loop.com.au</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
												<input class="form-check-input" type="checkbox" name="users"
													data-kt-check="true" data-kt-check-target="[data-user-id='16']"
													value="16" />
											</label>
											<!--end::Checkbox-->
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle">
												<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Details-->
											<div class="ms-5">
												<a href="#"
													class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
													Smith</a>
												<div class="fw-semibold text-muted">smith@kpmg.com</div>
											</div>
											<!--end::Details-->
										</div>
										<!--end::Details-->
										<!--begin::Access menu-->
										<div class="ms-2 w-100px">
											<select class="form-select form-select-solid form-select-sm"
												data-control="select2" data-hide-search="true">
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
									<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
										class="btn btn-active-light me-3">Cancel</button>
									<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add
										Selected Users</button>
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
									<img src="assets/media/illustrations/sketchy-1/1.png" alt=""
										class="w-100 h-200px h-sm-325px" />
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
						<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
								xmlns="http://www.w3.org/2000/svg">
								<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
									transform="rotate(-45 6 17.3137)" fill="currentColor" />
								<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
									fill="currentColor" />
							</svg>
						</span>
						<!--end::Svg Icon-->
					</div>
					<!--end::Close-->
				</div>
				<!--end::Modal header-->
				<!--begin::Modal body-->
				<div class="modal-body py-lg-10 px-lg-10">
					<!--begin::Stepper-->
					<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
						id="kt_modal_create_app_stepper">
						<!--begin::Aside-->
						<div
							class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
							<!--begin::Nav-->
							<div class="stepper-nav ps-lg-10">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
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
											<i class="stepper-check fas fa-check"></i>
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
											<i class="stepper-check fas fa-check"></i>
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
											<i class="stepper-check fas fa-check"></i>
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
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon w-40px h-40px">
											<i class="stepper-check fas fa-check"></i>
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
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Specify your unique app name"></i>
											</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input type="text" class="form-control form-control-lg form-control-solid"
												name="name" placeholder="" value="" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
												<span class="required">Category</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Select your app category"></i>
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
																<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
																			fill="currentColor" />
																		<path
																			d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Quick Online Courses</span>
															<span class="fs-7 text-muted">Creating a clear text
																structure is just one SEO</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="category"
															value="1" />
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
																<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-danger">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="2" y="2" width="9" height="9" rx="2"
																			fill="currentColor" />
																		<rect opacity="0.3" x="13" y="2" width="9"
																			height="9" rx="2" fill="currentColor" />
																		<rect opacity="0.3" x="13" y="13" width="9"
																			height="9" rx="2" fill="currentColor" />
																		<rect opacity="0.3" x="2" y="13" width="9"
																			height="9" rx="2" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Face to Face Discussions</span>
															<span class="fs-7 text-muted">Creating a clear text
																structure is just one aspect</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="category"
															value="2" />
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
																<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
																<span class="svg-icon svg-icon-1 svg-icon-success">
																	<svg width="24" height="24" viewBox="0 0 24 24"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3"
																			d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
																			fill="currentColor" />
																		<path
																			d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
																			fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</span>
														<!--end:Icon-->
														<!--begin:Info-->
														<span class="d-flex flex-column">
															<span class="fw-bold fs-6">Full Intro Training</span>
															<span class="fs-7 text-muted">Creating a clear text
																structure copywriting</span>
														</span>
														<!--end:Info-->
													</span>
													<!--end:Label-->
													<!--begin:Input-->
													<span class="form-check form-check-custom form-check-solid">
														<input class="form-check-input" type="radio" name="category"
															value="3" />
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
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Specify your apps framework"></i>
											</label>
											<!--end::Label-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin:Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin:Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-warning">
															<i class="fab fa-html5 text-warning fs-2x"></i>
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
													<input class="form-check-input" type="radio" checked="checked"
														name="framework" value="1" />
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
															<i class="fab fa-react text-success fs-2x"></i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bold fs-6">ReactJS</span>
														<span class="fs-7 text-muted">Robust and flexible app
															framework</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="framework"
														value="2" />
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
															<i class="fab fa-angular text-danger fs-2x"></i>
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
													<input class="form-check-input" type="radio" name="framework"
														value="3" />
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
															<i class="fab fa-vuejs text-primary fs-2x"></i>
														</span>
													</span>
													<!--end:Icon-->
													<!--begin:Info-->
													<span class="d-flex flex-column">
														<span class="fw-bold fs-6">Vue</span>
														<span class="fs-7 text-muted">Lightweight and responsive
															framework</span>
													</span>
													<!--end:Info-->
												</span>
												<!--end:Label-->
												<!--begin:Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="framework"
														value="4" />
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
											<input type="text" class="form-control form-control-lg form-control-solid"
												name="dbname" placeholder="" value="master_db" />
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Label-->
											<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
												<span class="required">Select Database Engine</span>
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Select your app database engine"></i>
											</label>
											<!--end::Label-->
											<!--begin:Option-->
											<label class="d-flex flex-stack cursor-pointer mb-5">
												<!--begin::Label-->
												<span class="d-flex align-items-center me-2">
													<!--begin::Icon-->
													<span class="symbol symbol-50px me-6">
														<span class="symbol-label bg-light-success">
															<i class="fas fa-database text-success fs-2x"></i>
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
													<input class="form-check-input" type="radio" name="dbengine"
														checked="checked" value="1" />
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
															<i class="fab fa-google text-danger fs-2x"></i>
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="d-flex flex-column">
														<span class="fw-bold fs-6">Firebase</span>
														<span class="fs-7 text-muted">Google based app data
															management</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
												<!--begin::Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="dbengine"
														value="2" />
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
															<i class="fab fa-amazon text-warning fs-2x"></i>
														</span>
													</span>
													<!--end::Icon-->
													<!--begin::Info-->
													<span class="d-flex flex-column">
														<span class="fw-bold fs-6">DynamoDB</span>
														<span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
													</span>
													<!--end::Info-->
												</span>
												<!--end::Label-->
												<!--begin::Input-->
												<span class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="radio" name="dbengine"
														value="3" />
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
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
													title="Specify a card holder's name"></i>
											</label>
											<!--end::Label-->
											<input type="text" class="form-control form-control-solid" placeholder=""
												name="card_name" value="Max Doe" />
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
												<input type="text" class="form-control form-control-solid"
													placeholder="Enter card number" name="card_number"
													value="4111 1111 1111 1111" />
												<!--end::Input-->
												<!--begin::Card logos-->
												<div class="position-absolute translate-middle-y top-50 end-0 me-5">
													<img src="assets/media/svg/card-logos/visa.svg" alt=""
														class="h-25px" />
													<img src="assets/media/svg/card-logos/mastercard.svg" alt=""
														class="h-25px" />
													<img src="assets/media/svg/card-logos/american-express.svg" alt=""
														class="h-25px" />
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
												<label class="required fs-6 fw-semibold form-label mb-2">Expiration
													Date</label>
												<!--end::Label-->
												<!--begin::Row-->
												<div class="row fv-row">
													<!--begin::Col-->
													<div class="col-6">
														<select name="card_expiry_month"
															class="form-select form-select-solid" data-control="select2"
															data-hide-search="true" data-placeholder="Month">
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
														<select name="card_expiry_year"
															class="form-select form-select-solid" data-control="select2"
															data-hide-search="true" data-placeholder="Year">
															<option></option>
															<option value="2022">2022</option>
															<option value="2023">2023</option>
															<option value="2024">2024</option>
															<option value="2025">2025</option>
															<option value="2026">2026</option>
															<option value="2027">2027</option>
															<option value="2028">2028</option>
															<option value="2029">2029</option>
															<option value="2030">2030</option>
															<option value="2031">2031</option>
															<option value="2032">2032</option>
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
												<label
													class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
													<span class="required">CVV</span>
													<i class="fas fa-exclamation-circle ms-2 fs-7"
														data-bs-toggle="tooltip" title="Enter a card CVV code"></i>
												</label>
												<!--end::Label-->
												<!--begin::Input wrapper-->
												<div class="position-relative">
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid"
														minlength="3" maxlength="4" placeholder="CVV" name="card_cvv" />
													<!--end::Input-->
													<!--begin::CVV icon-->
													<div class="position-absolute translate-middle-y top-50 end-0 me-3">
														<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
														<span class="svg-icon svg-icon-2hx">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<path d="M22 7H2V11H22V7Z" fill="currentColor" />
																<path opacity="0.3"
																	d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
																	fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
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
												<label class="fs-6 fw-semibold form-label">Save Card for further
													billing?</label>
												<div class="fs-7 fw-semibold text-muted">If you need more info, please
													check budget planning</div>
											</div>
											<!--end::Label-->
											<!--begin::Switch-->
											<label class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="1"
													checked="checked" />
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
										<h1 class="fw-bold text-dark mb-3">Release!</h1>
										<!--end::Heading-->
										<!--begin::Description-->
										<div class="text-muted fw-semibold fs-3">Submit your app to kickstart your
											project.</div>
										<!--end::Description-->
										<!--begin::Illustration-->
										<div class="text-center px-4 py-15">
											<img src="assets/media/illustrations/sketchy-1/9.png" alt=""
												class="mw-100 mh-300px" />
										</div>
										<!--end::Illustration-->
									</div>
								</div>
								<!--end::Step 5-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-10">
									<!--begin::Wrapper-->
									<div class="me-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3"
											data-kt-stepper-action="previous">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
											<span class="svg-icon svg-icon-3 me-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1"
														fill="currentColor" />
													<path
														d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
														fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->Back</button>
									</div>
									<!--end::Wrapper-->
									<!--begin::Wrapper-->
									<div>
										<button type="button" class="btn btn-lg btn-primary"
											data-kt-stepper-action="submit">
											<span class="indicator-label">Submit
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
												<span class="svg-icon svg-icon-3 ms-2 me-0">
													<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
														xmlns="http://www.w3.org/2000/svg">
														<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
															transform="rotate(-180 18 13)" fill="currentColor" />
														<path
															d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
															fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon--></span>
											<span class="indicator-progress">Please wait...
												<span
													class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary"
											data-kt-stepper-action="next">Continue
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-3 ms-1 me-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
													xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
														transform="rotate(-180 18 13)" fill="currentColor" />
													<path
														d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
														fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></button>
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
	 
	<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
		<script src="assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
		<script src="assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
		<script src="assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
		<script src="assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Custom Javascript-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>