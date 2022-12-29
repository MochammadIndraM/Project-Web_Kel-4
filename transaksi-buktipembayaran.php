<?php
include 'layout/header.php';
include 'layout/sidebar.php';
?>

		<!--**********************************
            Content body start
        ***********************************-->
		<div class="content-body">
			<div class="container-fluid">

				<!-- row -->

				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Bukti Pembayaran</h4>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-sm mb-0">
										<thead>
											<tr>
							
												<th class="align-middle">Id Transaksi</th>
												<th class="align-middle">Username</th>
												<th class="align-middle pe-7">Tanggal</th>
												<th class="align-middle">Jenis Pembayaran</th>
												<th class="align-middle">Bukti Pemabyaran</th>
												<th class="no-sort"></th>
											</tr>
										</thead>
										<tbody id="orders">
											
											<?php include 'koneksi.php';
											$sql2   = "SELECT detail_transaksi.id_transaksi, user.username, transaksi.tanggal, detail_transaksi.jenis_pembayaran, detail_transaksi.bukti_pembayaran FROM detail_transaksi JOIN transaksi ON transaksi.id_transaksi = detail_transaksi.id_transaksi JOIN user ON user.id_user = detail_transaksi.id_user";
											$q2     = mysqli_query($koneksi, $sql2);
											
											while ($r2 = mysqli_fetch_array($q2)) {
												$id         			= $r2['id_transaksi'];
												$user         			= $r2['username'];
												$tanggal      			 = $r2['tanggal'];
												$jenis       			= $r2['jenis_pembayaran'];
												$bukti      			= $r2['bukti_pembayaran'];
												
											?>
												<tr>
													<th scope="row"><?php echo $id ?></th>
													<th scope="row"><?php echo $user ?></th>
													<th scope="row"><?php echo $tanggal ?></th>
													<th scope="row"><?php echo $jenis ?></th>
													<th scope="row"><a href="project_mobile/transaksi/images/<?php echo $bukti ?>"><?php echo $bukti ?></a></th>
													
									
												</tr>

											<?php
											}
											?>
										</tbody>
									</table>
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
	<!-- <script src="js/styleSwitcher.js"></script> -->
	<script>
		function editmodal(id, nama, email, password, nohp) {
			// console.log(id + nama + email + password + nohp);

			$('#idadmin').val(id);
			$('#namaadmin').val(nama);
			$('#emailadmin').val(email);
			$('#passwordadmin').val(password);
			$('#nohpadmin').val(nohp);

			$('#Modaleditadmin').modal('show');
		}

		function hapusmodal(id) {
			// console.log(id + nama + email + password + nohp);

			$('#idadminhapus').val(id);

			$('#Modalhapusadmin').modal('show');
		}

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