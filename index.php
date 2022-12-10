<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template">
	<meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Admin Dashboard</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png">
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

	<!-- Style css -->
	<link href="css/style.css" rel="stylesheet">

</head>

<body>

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->

	<!--**********************************
        Main wrapper start
    ***********************************-->
	<div id="main-wrapper">

		<!--**********************************
            Nav header start
        ***********************************-->
		<div class="nav-header">
			<a href="index.html" class="brand-logo">
				<svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd"
						d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z"
						fill="url(#paint0_linear)"></path>
					<defs>
					</defs>
				</svg>
				<div class="brand-title">
					<h2 class="">PRON</h2>
					<span class="brand-sub-title">@printingonline</span>
				</div>
			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span><span class="line"></span><span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
            Nav header end
        ***********************************-->
		<!--**********************************
            Header start	
        ***********************************-->
		<div class="header border-bottom">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								Dashboard
							</div>
						</div>
						<ul class="navbar-nav header-right">

							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<svg width="28" height="28" viewbox="0 0 28 28" fill="none"
										xmlns="http://www.w3.org/2000/svg">
										<path
											d="M23.3333 19.8333H23.1187C23.2568 19.4597 23.3295 19.065 23.3333 18.6666V12.8333C23.3294 10.7663 22.6402 8.75902 21.3735 7.12565C20.1068 5.49228 18.3343 4.32508 16.3333 3.80679V3.49996C16.3333 2.88112 16.0875 2.28763 15.6499 1.85004C15.2123 1.41246 14.6188 1.16663 14 1.16663C13.3812 1.16663 12.7877 1.41246 12.3501 1.85004C11.9125 2.28763 11.6667 2.88112 11.6667 3.49996V3.80679C9.66574 4.32508 7.89317 5.49228 6.6265 7.12565C5.35983 8.75902 4.67058 10.7663 4.66667 12.8333V18.6666C4.67053 19.065 4.74316 19.4597 4.88133 19.8333H4.66667C4.35725 19.8333 4.0605 19.9562 3.84171 20.175C3.62292 20.3938 3.5 20.6905 3.5 21C3.5 21.3094 3.62292 21.6061 3.84171 21.8249C4.0605 22.0437 4.35725 22.1666 4.66667 22.1666H23.3333C23.6428 22.1666 23.9395 22.0437 24.1583 21.8249C24.3771 21.6061 24.5 21.3094 24.5 21C24.5 20.6905 24.3771 20.3938 24.1583 20.175C23.9395 19.9562 23.6428 19.8333 23.3333 19.8333Z"
											fill="#717579"></path>
										<path
											d="M9.9819 24.5C10.3863 25.2088 10.971 25.7981 11.6766 26.2079C12.3823 26.6178 13.1838 26.8337 13.9999 26.8337C14.816 26.8337 15.6175 26.6178 16.3232 26.2079C17.0288 25.7981 17.6135 25.2088 18.0179 24.5H9.9819Z"
											fill="#717579"></path>
									</svg>
									<span class="badge light text-white bg-warning rounded-circle">12</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div id="DZ_W_Notification1" class="widget-media dlab-scroll p-3"
										style="height:380px;">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media me-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
									<a class="all-notification" href="javascript:void(0);">See all notifications <i
											class="ti-arrow-end"></i></a>
								</div>
							</li>


							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="images/user.jpg" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
											width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ms-2">Profile </span>
									</a>
									\
									<a href="page-error-404.html" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
											width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
											stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
											<polyline points="16 17 21 12 16 7"></polyline>
											<line x1="21" y1="12" x2="9" y2="12"></line>
										</svg>
										<span class="ms-2">Logout </span>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="dlabnav">
			<div class="dlabnav-scroll">
				<ul class="metismenu" id="menu">
					<li><a href="index.php" aria-expanded="false">
							<i class="fas fa-home"></i>
							<span class="nav-text">Dashboard</span>
						</a>

					</li>

					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-info-circle"></i>
							<span class="nav-text">Master Data</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="data-admin.php">Data Admin</a></li>
							<li><a href="data-customer.php">Data Customer</a></li>
							<li><a href="data-daftar-harga-print.html">Daftar Harga Print</a></li>
							<li><a href="data-barang.html">Data Barang</a></li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void()" aria-expanded="false">
							<i class="fas fa-file-alt"></i>
							<span class="nav-text">Transaksi</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="form-element.html">Invoice</a></li>
							<li><a href="form-wizard.html">Bukti Pembayaran</a></li>
						</ul>
					</li>
					<li><a href="javascript:void()" aria-expanded="false">
							<i class="fas fa-table"></i>
							<span class="nav-text">Riwayat</span>
						</a>
					</li>
					<div class="copyright">
						<p><strong>PRON TEAM</strong> © 2022 All Rights Reserved</p>
					</div>
				</ul>
			</div>
		</div>
		<!--**********************************
            Sidebar end
        ***********************************-->

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 flex-wrap">
												<h4 class="fs-20 font-w700 mb-2">Project Statistics</h4>
												<div class="d-flex align-items-center project-tab mb-2">
													<div class="dropdown ms-2">
														<div class="btn-link" data-bs-toggle="dropdown">
															<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
																xmlns="http://www.w3.org/2000/svg">
																<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
																</circle>
																<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
																</circle>
															</svg>
														</div>
														<div class="dropdown-menu dropdown-menu-right">
															<a class="dropdown-item"
																href="javascript:void(0)">Delete</a>
															<a class="dropdown-item" href="javascript:void(0)">Edit</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div
													class="d-flex justify-content-between align-items-center flex-wrap">
													<div class="d-flex">
														<div
															class="d-inline-block position-relative donut-chart-sale mb-3">
															<span class="donut1"
																data-peity='{ "fill": ["rgba(136,108,192,1)", "rgba(241, 234, 255, 1)"],   "innerRadius": 20, "radius": 15}'>5/8</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-24 font-w700 ">246</h4>
															<span class="fs-16 font-w400 d-block">Total Projects</span>
														</div>
													</div>
													<div class="d-flex">
														<div class="d-flex me-5">
															<div class="mt-2">
																<svg width="13" height="13" viewbox="0 0 13 13"
																	fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFCF6D">
																	</circle>
																</svg>
															</div>
															<div class="ms-3">
																<h4 class="fs-24 font-w700 ">246</h4>
																<span class="fs-16 font-w400 d-block">On Going</span>
															</div>
														</div>
														<div class="d-flex">
															<div class="mt-2">
																<svg width="13" height="13" viewbox="0 0 13 13"
																	fill="none" xmlns="http://www.w3.org/2000/svg">
																	<circle cx="6.5" cy="6.5" r="6.5" fill="#FFA7D7">
																	</circle>
																</svg>

															</div>
															<div class="ms-3">
																<h4 class="fs-24 font-w700 ">28</h4>
																<span class="fs-16 font-w400 d-block">Unfinished</span>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-content">
													<div class="tab-pane fade active show" id="monthly">
														<div id="chartBar" class="chartBar"></div>
													</div>
													<div class="tab-pane fade" id="Weekly">
														<div id="chartBar1" class="chartBar"></div>
													</div>
													<div class="tab-pane fade" id="Today">
														<div id="chartBar2" class="chartBar"></div>
													</div>
												</div>

											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0 pb-0">
												<h4 class="fs-20 font-w700 mb-0">Completion Project Rate</h4>
												<div class="dropdown ">
													<div class="btn-link" data-bs-toggle="dropdown">
														<svg width="24" height="24" viewbox="0 0 24 24" fill="none"
															xmlns="http://www.w3.org/2000/svg">
															<circle cx="12.4999" cy="3.5" r="2.5" fill="#A5A5A5">
															</circle>
															<circle cx="12.4999" cy="11.5" r="2.5" fill="#A5A5A5">
															</circle>
															<circle cx="12.4999" cy="19.5" r="2.5" fill="#A5A5A5">
															</circle>
														</svg>
													</div>
													<div class="dropdown-menu dropdown-menu-right">
														<a class="dropdown-item" href="javascript:void(0)">Delete</a>
														<a class="dropdown-item" href="javascript:void(0)">Edit</a>
													</div>
												</div>
											</div>
											<div class="card-body pb-0">
												<div id="revenueMap" class="revenueMap"></div>
											</div>
										</div>
									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-header border-0">
												<div>
													<h4 class="fs-20 font-w700">Recent Emails</h4>
													<span class="fs-14 font-w400">Lorem ipsum dolor sit amet</span>
												</div>
												<div>
													<a href="javascript:void(0);"
														class="btn btn-outline-primary btn-rounded fs-18">View More</a>
												</div>
											</div>
											<div class="card-body px-0">
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<span class="bg-success">K</span>
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">How to improve project
																management flows</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do<br> eiusmod tempor
																incididunt ut labore et dolore magna aliqua...</span>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
												<div class="d-flex justify-content-between recent-emails">
													<div class="d-flex">
														<div class="profile-k">
															<img src="images/profile/small/pic6.jpg" alt="">
														</div>
														<div class="ms-3">
															<h4 class="fs-18 font-w500">Fillow Final UseCase Diagram
															</h4>
															<span class="font-w400 d-block">Lorem ipsum dolor sit amet,
																consectetur adipiscing elit, sed do<br> eiusmod tempor
																incididunt ut labore et dolore magna aliqua...</span>
															<div class="final-badge">
																<span class="badge text-black border"><i
																		class="far fa-file-alt me-3"></i>Master_file.fig</span>
																<span class="badge text-black border"><i
																		class="fas fa-image me-2"></i>CoverPreview.jpg</span>
																<span class="badge border bgl-primary font-w700">4 files
																	more</span>
															</div>
														</div>
													</div>
													<div class="email-check">
														<label class="like-btn mb-0">
															<input type="checkbox">
															<span class="checkmark"></span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="col-xl-6">
								<div class="row">
									<div class="col-xl-12">
										<div class="row">
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4 pb-0 justify-content-between">
														<div>
															<h4 class="fs-18 font-w600 mb-4 text-nowrap">Total Clients
															</h4>
															<div class="d-flex align-items-center">
																<h2 class="fs-32 font-w700 mb-0">68</h2>
																<span class="d-block ms-4">
																	<svg width="21" height="11" viewbox="0 0 21 11"
																		fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path
																			d="M1.49217 11C0.590508 11 0.149368 9.9006 0.800944 9.27736L9.80878 0.66117C10.1954 0.29136 10.8046 0.291359 11.1912 0.661169L20.1991 9.27736C20.8506 9.9006 20.4095 11 19.5078 11H1.49217Z"
																			fill="#09BD3C"></path>
																	</svg>
																	<small
																		class="d-block fs-16 font-w400 text-success">+0,5%</small>
																</span>
															</div>
														</div>
														<div id="columnChart"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body px-4 pb-0">
														<h4 class="fs-18 font-w600 mb-5 text-nowrap">Total Clients</h4>
														<div class="progress default-progress">
															<div class="progress-bar bg-gradient1 progress-animated"
																style="width: 40%; height:10px;" role="progressbar">
																<span class="sr-only">45% Complete</span>
															</div>
														</div>
														<div
															class="d-flex align-items-end mt-2 pb-3 justify-content-between">
															<span>76 left from target</span>
															<h4 class="mb-0">42</h4>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
																<h2 class="fs-32 font-w700">562</h2>
																<span class="fs-18 font-w500 d-block">Total
																	Clients</span>
																<span class="d-block fs-16 font-w400"><small
																		class="text-danger">-2%</small> than last
																	month</span>
															</div>
														</div>
														<div id="NewCustomers"></div>
													</div>
												</div>
											</div>
											<div class="col-xl-6 col-sm-6">
												<div class="card">
													<div class="card-body d-flex px-4  justify-content-between">
														<div>
															<div class="">
																<h2 class="fs-32 font-w700">892</h2>
																<span class="fs-18 font-w500 d-block">New
																	Projects</span>
																<span class="d-block fs-16 font-w400"><small
																		class="text-success">-2%</small> than last
																	month</span>
															</div>
														</div>
														<div id="NewCustomers1"></div>
													</div>
												</div>
											</div>
										</div>

									</div>
									<div class="col-xl-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-xl-6 col-sm-6">
														<div class=" owl-carousel card-slider">
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile
																	Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde
																	omnis iste natus error sit voluptatem accusantium
																	doloremque </span>
															</div>
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile
																	Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde
																	omnis iste natus error sit voluptatem accusantium
																	doloremque </span>
															</div>
															<div class="items">
																<h4 class="fs-20 font-w700 mb-4">Fillow Company Profile
																	Website Project</h4>
																<span class="fs-14 font-w400">Sed ut perspiciatis unde
																	omnis iste natus error sit voluptatem accusantium
																	doloremque </span>
															</div>
														</div>
													</div>
													<div class="col-xl-6 redial col-sm-6">
														<div id="redial"></div>
														<span class="text-center d-block fs-18 font-w600">On Progress
															<small class="text-success">70%</small></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-12 col-lg-12">
										<div class="row">
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0">
														<div>
															<h4 class="fs-20 font-w700">Email Categories</h4>
															<span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit
																amet</span>
														</div>
													</div>
													<div class="card-body">
														<div id="emailchart"> </div>
														<div class="mb-3 mt-4">
															<h4 class="fs-18 font-w600">Legend</h4>
														</div>
														<div>
															<div
																class="d-flex align-items-center justify-content-between mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#886CC0"></rect>
																	</svg>
																	Primary (27%)
																</span>
																<span class="fs-18 font-w600">763</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#26E023"></rect>
																	</svg>
																	Promotion (11%)
																</span>
																<span class="fs-18 font-w600">321</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#61CFF1"></rect>
																	</svg>
																	Forum (22%)
																</span>
																<span class="fs-18 font-w600">69</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#FFDA7C"></rect>
																	</svg>
																	Socials (15%)
																</span>
																<span class="fs-18 font-w600">154</span>
															</div>
															<div
																class="d-flex align-items-center justify-content-between  mb-4">
																<span class="fs-18 font-w500">
																	<svg class="me-3" width="20" height="20"
																		viewbox="0 0 20 20" fill="none"
																		xmlns="http://www.w3.org/2000/svg">
																		<rect width="20" height="20" rx="6"
																			fill="#FF86B1"></rect>
																	</svg>
																	Spam (25%)
																</span>
																<span class="fs-18 font-w600">696</span>
															</div>
														</div>

													</div>
													<div class="card-footer border-0 pt-0">
														<a href="javascript:void(0);"
															class="btn btn-outline-primary d-block btn-rounded">Update
															Progress</a>

													</div>
												</div>
											</div>
											<div class="col-xl-6 col-xxl-12 col-sm-6">
												<div class="card">
													<div class="card-header border-0 pb-0">
														<div>
															<h4 class="fs-20 font-w700">Important Projects</h4>
															<span class="fs-14 font-w400 d-block">Lorem ipsum dolor sit
																amet</span>
														</div>
													</div>
													<div class="card-body pb-0">
														<div class="project-details">
															<div
																class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<span class="big-wind">
																		<img src="images/big-wind.png" alt="">
																	</span>
																	<div class="ms-3">
																		<h4>Big Wind</h4>
																		<span class="fs-14 font-w400">Creative
																			Agency</span>
																	</div>
																</div>
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="24" height="24" viewbox="0 0 24 24"
																			fill="none"
																			xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="11.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="19.5" r="2.5"
																				fill="#A5A5A5"></circle>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item"
																			href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item"
																			href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h4 class="fs-16 font-w600 mt-4">Optimization Dashboard Page
																for indexing in Google</h4>
															<div class="projects">
																<span
																	class="badge bgl-warning text-warning font-w700 me-3">SEO</span>
																<span
																	class="badge bgl-danger text-danger font-w700">MARKETING</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated"
																		style="width: 45%; height:10px;"
																		role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div
																	class="d-flex align-items-end mt-3 pb-3 justify-content-between">
																	<span class="fs-14 font-w400"><small
																			class="font-w700 me-2">12</small>Task
																		Done</span>
																	<span class="fs-14 font-w400">Due date:
																		12/05/2020</span>
																</div>
															</div>
														</div>
														<div class="project-details">
															<div
																class="d-flex align-items-center justify-content-between">
																<div class="d-flex align-items-center">
																	<span class="big-wind">
																		<img src="images/circle-hunt.png" alt="">
																	</span>
																	<div class="ms-3">
																		<h4>Circle Hunt</h4>
																		<span class="fs-14 font-w400">Creative
																			Agency</span>
																	</div>
																</div>
																<div class="dropdown">
																	<div class="btn-link" data-bs-toggle="dropdown">
																		<svg width="24" height="24" viewbox="0 0 24 24"
																			fill="none"
																			xmlns="http://www.w3.org/2000/svg">
																			<circle cx="12.4999" cy="3.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="11.5" r="2.5"
																				fill="#A5A5A5"></circle>
																			<circle cx="12.4999" cy="19.5" r="2.5"
																				fill="#A5A5A5"></circle>
																		</svg>
																	</div>
																	<div class="dropdown-menu dropdown-menu-right">
																		<a class="dropdown-item"
																			href="javascript:void(0)">Delete</a>
																		<a class="dropdown-item"
																			href="javascript:void(0)">Edit</a>
																	</div>
																</div>
															</div>
															<h4 class="fs-16 font-w600 mt-4">Redesign Landing Page
																Website for Company Profile</h4>
															<div class="projects">
																<span
																	class="badge bgl-primary text-primary font-w700 me-3">UI/UX</span>
																<span
																	class="badge bgl-danger text-danger font-w700">WEBSITE</span>
															</div>
															<div class="mt-3">
																<div class="progress default-progress">
																	<div class="progress-bar bg-gradient1 progress-animated"
																		style="width: 45%; height:10px;"
																		role="progressbar">
																		<span class="sr-only">45% Complete</span>
																	</div>
																</div>
																<div
																	class="d-flex align-items-end mt-3 pb-3 justify-content-between">
																	<span class="fs-14 font-w400"><small
																			class="font-w700 me-2">12</small>Task
																		Done</span>
																	<span class="fs-14 font-w400">Due date:
																		12/05/2020</span>
																</div>
															</div>
														</div>
													</div>
													<div class="card-footer pt-0 border-0">
														<a href="javascript:void(0);"
															class="btn btn-outline-primary d-block btn-rounded">Pin
															other projects</a>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--**********************************
            Content body end
        ***********************************-->




		<!--**********************************
            Footer start
        ***********************************-->
		<div class="footer">
			<div class="copyright">
				<p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
			</div>
		</div>
		<!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

		<!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
	<!--**********************************
        Main wrapper end
    ***********************************-->

	<!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>

	<script src="vendor/chart.js/Chart.bundle.min.js"></script>

	<!-- Chart piety plugin files -->
	<script src="vendor/peity/jquery.peity.min.js"></script>
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>

	<script src="vendor/owl-carousel/owl.carousel.js"></script>

	<script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
	<script src="js/styleSwitcher.js"></script>
	<script>
		function cardsCenter() {

			/*  testimonial one function by = owl.carousel.js */



			jQuery('.card-slider').owlCarousel({
				loop: true,
				margin: 0,
				nav: true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive: {
					0: {
						items: 1
					},
					576: {
						items: 1
					},
					800: {
						items: 1
					},
					991: {
						items: 1
					},
					1200: {
						items: 1
					},
					1600: {
						items: 1
					}
				}
			})
		}

		jQuery(window).on('load', function () {
			setTimeout(function () {
				cardsCenter();
			}, 1000);
		});

	</script>

</body>

</html>