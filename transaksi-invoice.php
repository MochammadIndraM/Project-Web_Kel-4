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
								<h4 class="card-title">Invoice</h4>

							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-sm mb-0">
										<thead>
											<tr>
							
												<th class="align-middle">Id Transaksi</th>
												<th class="align-middle pe-7">Tanggal</th>
												<th class="align-middle">File</th>
												<th class="align-middle">Jenis Print</th>
												<th class="align-middle">Jumlah Print</th>
												<th class="align-middle">Jumlah Kertas</th>
												<th class="align-middle">Harga</th>
												<th class="align-middle">Status</th>
												<th class="no-sort"></th>
											</tr>
										</thead>
										<tbody id="orders">
											<!-- <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox checkbox-success">
														<input type="checkbox" class="form-check-input" id="checkbox">
														<label class="form-check-label" for="checkbox"></label>
													</div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <strong>#181</strong></a> by <strong>Ricky
                                                        Antony</strong><br><a href="mailto:ricky@example.com">ricky@example.com</a></td>
                                                <td class="py-2">20/04/2020</td>
                                                <td class="py-2">Ricky Antony, 2392 Main Avenue, Penasauka, New Jersey 02149
                                                    <p class="mb-0 text-500">Via Flat Rate</p>
                                                </td>
                                                <td class="py-2 text-end"><span class="badge badge-success">Completed<span class="ms-1 fa fa-check"></span></span>
                                                </td>
                                                <td class="py-2 text-end">$99
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-0">
                                                            <div class="py-2"><a class="dropdown-item" href="data-admin.php">Completed</a><a class="dropdown-item" href="javascript:void(0);">Processing</a><a class="dropdown-item" href="javascript:void(0);">On Hold</a><a class="dropdown-item" href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox ">
														<input type="checkbox" class="form-check-input" id="checkbox1">
														<label class="form-check-label" for="checkbox1"></label>
													</div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <strong>#182</strong></a> by <strong>Kin Rossow</strong><br><a href="mailto:kin@example.com">kin@example.com</a></td>
                                                <td class="py-2">20/04/2020</td>
                                                <td class="py-2">Kin Rossow, 1 Hollywood Blvd,Beverly Hills, California 90210
                                                    <p class="mb-0 text-500">Via Free Shipping
                                                    </p>
                                                </td>
                                                <td class="py-2 text-end"><span class="badge badge-primary">Processing<span class="ms-1 fa fa-redo"></span></span>
                                                </td>
                                                <td class="py-2 text-end">$120
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-1" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-1">
                                                            <div class="py-2"><a class="dropdown-item" href="javascript:void(0);">Completed</a><a class="dropdown-item" href="javascript:void(0);">Processing</a><a class="dropdown-item" href="javascript:void(0);">On Hold</a><a class="dropdown-item" href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox checkbox-secondary">
														<input type="checkbox" class="form-check-input" id="checkbox2">
														<label class="form-check-label" for="checkbox2"></label>
													</div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <strong>#183</strong></a> by <strong>Merry
                                                        Diana</strong><br><a href="mailto:merry@example.com">merry@example.com</a></td>
                                                <td class="py-2">30/04/2020</td>
                                                <td class="py-2">Merry Diana, 1 Infinite Loop, Cupertino, California 90210
                                                    <p class="mb-0 text-500">Via Link Road</p>
                                                </td>
                                                <td class="py-2 text-end"><span class="badge badge-secondary">On
                                                        Hold<span class="ms-1 fa fa-ban"></span></span>
                                                </td>
                                                <td class="py-2 text-end">$70
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-2" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-2">
                                                            <div class="py-2"><a class="dropdown-item" href="javascript:void(0);">Completed</a><a class="dropdown-item" href="javascript:void(0);">Processing</a><a class="dropdown-item" href="javascript:void(0);">On Hold</a><a class="dropdown-item" href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="btn-reveal-trigger">
                                                <td class="py-2">
                                                    <div class="form-check custom-checkbox  checkbox-warning">
														<input type="checkbox" class="form-check-input" id="checkbox3">
														<label class="form-check-label" for="checkbox3"></label>
													</div>
                                                </td>
                                                <td class="py-2">
                                                    <a href="#">
                                                        <strong>#184</strong></a> by <strong>Bucky
                                                        Robert</strong><br><a href="mailto:bucky@example.com">bucky@example.com</a></td>
                                                <td class="py-2">30/04/2020</td>
                                                <td class="py-2">Bucky Robert, 1 Infinite Loop, Cupertino, California 90210
                                                    <p class="mb-0 text-500">Via Free Shipping</p>
                                                </td>
                                                <td class="py-2 text-end"><span class="badge badge-warning">Pending<span class="ms-1 fas fa-stream"></span></span>
                                                </td>
                                                <td class="py-2 text-end">$92
                                                </td>
                                                <td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-3" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-3">
                                                            <div class="py-2"><a class="dropdown-item" href="javascript:void(0);">Completed</a><a class="dropdown-item" href="javascript:void(0);">Processing</a><a class="dropdown-item" href="javascript:void(0);">On Hold</a><a class="dropdown-item" href="javascript:void(0);">Pending</a>
                                                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr> -->
											<?php include 'koneksi.php';
											$sql2   = "SELECT transaksi.id_transaksi, transaksi.tanggal, transaksi.file, list_harga_print.jenis_print, transaksi.berapa_kali_print, transaksi.jumlah_kertas, transaksi.total_harga, transaksi.status FROM transaksi JOIN list_harga_print ON transaksi.id_print = list_harga_print.id_print WHERE NOT transaksi.status = 'selesai';";
											$q2     = mysqli_query($koneksi, $sql2);
											
											while ($r2 = mysqli_fetch_array($q2)) {
												$id         			= $r2['id_transaksi'];
												$tanggal      			 = $r2['tanggal'];
												$file       			= $r2['file'];
												$idprint    			= $r2['jenis_print'];
												$berapa_kali_print       = $r2['berapa_kali_print'];
												$jumlah_kertas			 = $r2['jumlah_kertas'];
												$total_harga			 = $r2['total_harga'];
												$status			 		= $r2['status'];
											?>
												<tr>
													<th scope="row"><?php echo $id ?></th>
													<th scope="row"><?php echo $tanggal ?></th>
													<th scope="row"><a href="project_mobile/transaksi/images/<?php echo $file ?>"><?php echo $file ?></a></th>
													<th scope="row"><?php echo $idprint ?></th>
													<th scope="row"><?php echo $berapa_kali_print ?></th>
													<th scope="row"><?php echo $jumlah_kertas ?></th>
													<th scope="row"><?php echo $total_harga ?></th>
													<th scope="row"><?php echo $status ?></th>
													
													<td class="py-2 text-end">
                                                    <div class="dropdown text-sans-serif"><button class="btn btn-primary tp-btn-light sharp" type="button" id="order-dropdown-0" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end border py-0" aria-labelledby="order-dropdown-0">
                                                            <div class="py-2"><a class="dropdown-item" href="controllers/prosestransaksi.php?complete=<?= $id; ?>">Completed</a><a class="dropdown-item" href="controllers/prosestransaksi.php?siapdiambil=<?= $id; ?>">Siap Diambil</a><a class="dropdown-item" href="controllers/prosestransaksi.php?onproses=<?= $id; ?>">On Proses</a><a class="dropdown-item" href="controllers/prosestransaksi.php?pending=<?= $id; ?>">Pending</a>
                                                            </div>
                                                        </div>
                                                    </div>
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