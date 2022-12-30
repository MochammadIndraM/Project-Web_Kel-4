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
			<a class="brand-logo">

				<svg width="40" height="40" viewBox="0 0 95 90" fill="none" xmlns="http://www.w3.org/2000/svg">
					<ellipse cx="47.5" cy="45" rx="47.5" ry="45" fill="#886CC0" />
					<path d="M29.0653 67L36.3097 23.3636H53.5256C56.821 23.3636 59.527 23.9957 61.6435 25.2599C63.7741 26.5099 65.2656 28.25 66.1179 30.4801C66.9844 32.696 67.1832 35.2528 66.7145 38.1506C66.2315 41.0625 65.1804 43.6264 63.5611 45.8423C61.956 48.044 59.8679 49.7628 57.2969 50.9986C54.7259 52.2344 51.7571 52.8523 48.3906 52.8523H37.4176L38.6321 45.4588H48.1136C49.9034 45.4588 51.4304 45.1534 52.6946 44.5426C53.973 43.9176 54.9886 43.0582 55.7415 41.9645C56.4943 40.8565 56.9844 39.5852 57.2116 38.1506C57.4531 36.6875 57.375 35.4162 56.9773 34.3366C56.5795 33.2571 55.848 32.419 54.7827 31.8224C53.7315 31.2116 52.3182 30.9062 50.5426 30.9062H44.321L38.2912 67H29.0653Z" fill="white" />
				</svg>
				<div class="brand-title">
					<h2 class="">PRON.</h2>
					<span class="brand-sub-title">Printing Online</span>
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

		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<div class="dashboard_bar">
								<p id="time" onload="currentTime()"></p>
							</div>
						</div>
						<ul class="navbar-nav header-right">
							<li class="nav-item dropdown  header-profile">
								<a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
									<img src="images/user.jpg" width="56" alt="">
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="app-profile.html" class="dropdown-item ai-icon">
										<svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
											<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
											<circle cx="12" cy="7" r="4"></circle>
										</svg>
										<span class="ms-2">Profile </span>
									</a>

									<a href="controllers/logout.php" class="dropdown-item ai-icon">
										<svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
		<script>
			// Time
			function currentTime() {

				let date = new Date();
				let hh = date.getHours();
				let mm = date.getMinutes();
				let ss = date.getSeconds();

				hh = (hh < 10) ? "0" + hh : hh;
				mm = (mm < 10) ? "0" + mm : mm;
				ss = (ss < 10) ? "0" + ss : ss;

				let time = hh + " : " + mm + " : " + ss;

				document.getElementById("time").innerText = time;

				var t = setTimeout(function() {
					currentTime()
				}, 1000);

			}

			window.onresize = function() {
				runchart();
			}

			currentTime();

			// Date
			function datenow() {
				var today = new Date();
				var dd = String(today.getDate()).padStart(2, '0'); //pdStart tujuannya agar semua item memiliki panjang yang diinginkan
				var mm = String(today.getMonth()); //January is 0!
				var yyyy = today.getFullYear();

				var cars = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

				for (i = 0; i < cars.length; i++) {
					if (i == mm) {
						mm = cars[i];
						break;
					}
				}

				today = dd + ' ' + mm + ' ' + yyyy;

				document.getElementById("date").innerText = today;
			}
			datenow();
		</script>