<!DOCTYPE html>
<html lang="en">

<head>

	<?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>

	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- Notifikasi data berhasil di simpan -->
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						Detail Data pengumuman
					</div>

					<div class="card-body">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-10">
									<form enctype="multipart/form-data">

										<input type="hidden" name="id" value="<?php echo $pengumuman->id_pengumuman; ?>">

										<table class="table table-striped">
											<tbody>
												<tr>
													<th scope="row">Tanggal Pemadaman</th>
													<td>														
														<?php $date = new DateTime($pengumuman->tanggal); ?>
														: <?php echo $date->format('d/m/Y');?>
													</td>
												</tr>
												<tr>
													<th scope="row">penyebab</th>
													<td>
														: <?php echo $pengumuman->penyebab; ?>											
													</td>
												</tr>
												<tr>
													<th scope="row">Wilayah</th>
													<td>
														: <?php echo $pengumuman->wilayah; ?>											
													</td>
												</tr>
											</tbody>
										</table>

										<div class="text-right">
											<a href="<?php echo site_url('admin/pengumuman'); ?>">
												<button type="button" class="btn btn-default pull-right btn-primary">
													<i class="fas fa-arrow-left"></i> Kembali</button>
											</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				
			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->

	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>