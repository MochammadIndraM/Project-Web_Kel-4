<?php
include 'layout/header.php';
include 'layout/sidebar.php';
include 'koneksi.php';


?>

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
										<h4 class="fs-20 font-w700 mb-2">Statistik Transaksi</h4>
										<div class="d-flex align-items-center project-tab mb-2">
											<div class="dropdown ms-2">


											</div>
										</div>
									</div>
									<div class="card-body">
										
										<div class="tab-content">
											<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
										</div>

									</div>
								</div>
							</div>

						</div>

					</div>
					<div class="col-xl-6">
					<div class="row">
							<div class="col-xl-12">
								<div class="card">
									
									<div class="card-body">
										
										<div class="tab-content">
										<?php include 'koneksi.php';
									$sql2   = "SELECT SUM(total_harga) AS tcuan FROM transaksi WHERE status = 'selesai'";
									$q2     = mysqli_query($koneksi, $sql2);
						
									while ($r2 = mysqli_fetch_array($q2)) {
										$total         = $r2['tcuan'];
									}


									?>
											<h1><b>Total Income Hari Ini</b></h1>
											<h1>Rp. <?php echo $total ?></h1>
									
										</div>

									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									
									<div class="card-body">
										
										<div class="tab-content">
										<?php include 'koneksi.php';
									$sql2   = "SELECT COUNT(transaksi.id_print) AS terbesar, list_harga_print.jenis_print FROM transaksi JOIN list_harga_print ON transaksi.id_print = list_harga_print.id_print GROUP BY(transaksi.id_print) ORDER BY terbesar ASC";
									$q2     = mysqli_query($koneksi, $sql2);
						
									while ($r2 = mysqli_fetch_array($q2)) {
										$terbesar         = $r2['jenis_print'];
									}


									?>
											<h1><b>Jenis Print Paling Laku</b></h1>
											<h1><?php echo $terbesar ?></h1>
									
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

<?php
$koneksi = mysqli_connect("localhost", "wstifci1_jasaprinting", "Polije1234", "wstifci1_jasaprinting");
try {
	$sql = mysqli_query($koneksi, "SELECT COUNT(status) AS tstatus FROM transaksi GROUP BY(status)");

	while ($row = $sql->fetch_assoc()) {
		$t1[] = $row['tstatus'];
	}
	unset($sql);
} catch (Exception $e) {
	die("error");
}


?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<!-- <script src="js/styleSwitcher.js"></script> -->
<script>
	var xValues = ["Pending", "On Proses", "Siap Diambil", "Selesai"];
	var barColors = [
		"#b91d47",
		"#00aba9",
		"#2b5797",
		"#e8c3b9"
	];

	new Chart("myChart", {
		type: "pie",
		data: {
			labels: xValues,
			datasets: [{
				
				data: <?php echo json_encode($t1); ?>,
				backgroundColor: barColors
			}]
		},
		options: {
			title: {
				display: true,
				text: "Transaksi Report"
			}
		}
	});
</script>
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

	jQuery(window).on('load', function() {
		setTimeout(function() {
			cardsCenter();
		}, 1000);
	});
</script>

</body>

</html>