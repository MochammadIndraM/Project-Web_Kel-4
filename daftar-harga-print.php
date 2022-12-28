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
								<h4 class="card-title">Daftar Harga Print</h4>

							</div>
							<div class="card-body">
								<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#Modaltambahprint">Tambah</button>
								<div class="table-responsive">
									<table class="table table-responsive-md">
										<thead>
											<tr>

												<th><strong>NO.</strong></th>
												<th><strong>Jenis Print </strong></th>
												<th><strong>Harga</strong></th>
											</tr>
										</thead>
										<tbody>
											<?php include 'koneksi.php';
											$sql2   = "SELECT * FROM list_harga_print;";
											$q2     = mysqli_query($koneksi, $sql2);
											$urut   = 1;
											while ($r2 = mysqli_fetch_array($q2)) {
												$id         = $r2['id_print'];
												$jenis_print       = $r2['jenis_print'];
												$harga       = $r2['harga'];



											?>
												<tr>
													<th scope="row"><?php echo $urut++ ?></th>
													<td scope="row"><?php echo $jenis_print ?></td>
													<td scope="row"><?php echo $harga ?></td>
													<td scope="row">
														<button type="button" class="btn btn-warning mb-2" onclick="editmodal('<?= $id ?>', '<?= $jenis_print ?>', '<?= $harga ?>')">Edit</button>
														<button type="button" class="btn btn-danger mb-2" onclick="hapusmodal('<?= $id ?>')">Hapus</button>
													</td>
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
				<!-- Modal Tambah -->
				<div class="modal fade" id="Modaltambahprint" style="display: none;" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Tambah</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<form action="controllers/crudhargaprint.php" method="post">
									<div class="mb-3 row">
										<label class="form-label">Jenis Print</label>
										<input type="text" class="form-control" placeholder="Masukkan Jenis Print" name="tjenis">
									</div>
									<div class="mb-3 row">
										<label class="form-label">Harga</label>
										<input type="text" class="form-control" placeholder="Masukkan Harga" name="tharga">
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary" name="tambah">Tambah</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal Tambah End -->

				<!-- Modal Edit -->
				<div class="modal fade" id="Modaleditprint" style="display: none;" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Edit Data</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<form action="controllers/crudhargaprint.php" method="post">
									<input type="hidden" class="form-control" id="idprint" name="tidjenis">
									<div class="mb-3 row">
										<label class="form-label">Jenis Print</label>
										<input type="text" class="form-control" placeholder="Masukkan Jenis Print" id="idjenis" name="tjenis">
									</div>
									<div class="mb-3 row">
										<label class="form-label">Harga</label>
										<input type="text" class="form-control" placeholder="Masukkan Harga" id="idharga" name="tharga">
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary" name="edit">Edit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal Edit End -->

				<!-- Modal Hapus -->
				<div class="modal fade" id="Modalhapusprint" style="display: none;" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Hapus Data</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal">
								</button>
							</div>
							<div class="modal-body">
								<form action="controllers/crudhargaprint.php" method="post">
									<input type="hidden" class="form-control" id="idprinthapus" name="tidjenis">
									<h5 class="text-center"> Apakah Anda yakin akan menghapus data ini?</h5>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary" name="hapus">Hapus</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- Modal Hapus End -->

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
		function editmodal(id, jenis_print, harga) {
			// console.log(id + nama + email + password + nohp);

			$('#idprint').val(id);
			$('#idjenis').val(jenis_print);
			$('#idharga').val(harga);

			$('#Modaleditprint').modal('show');
		}

		function hapusmodal(id) {
			// console.log(id + nama + email + password + nohp);

			$('#idprinthapus').val(id);

			$('#Modalhapusprint').modal('show');
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