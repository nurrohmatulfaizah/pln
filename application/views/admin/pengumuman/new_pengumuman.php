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
						Tambah Pengumuman Pemadaman
					</div>

					<div class="card-body">
						<form action="<?php echo site_url('admin/pengumuman/add'); ?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>Tanggal Pemadaman</label>
								<input type="date" class="form-control" name="tanggal" value="<?php echo $tanggal; ?>">
								<span style="color: red">
									<?php echo form_error('tanggal'); ?>
								</span>
							</div>							

							<div class="form-group">
								<label for="waktu">Waktu Padam</label>
								<input type="text" class="form-control" name="waktu" value="<?php echo $waktu; ?>" placeholder="Waktu Padam">
								<span style="color: red">
									<?php echo form_error('waktu'); ?>
								</span>
							</div>

							<div class="form-group">
								<label for="penyebab">Penyebab Pemadaman</label>
								<textarea class="form-control" name="penyebab" placeholder="Penyebab Pemadaman" rows="8"><?php echo $penyebab; ?></textarea>								
								<span style="color: red">
									<?php echo form_error('penyebab'); ?>
								</span>
							</div>
							<div class="form-group">
								<label for="wilayah">Daerah Yang Terkena Pemadaman</label>
								<textarea class="form-control" name="wilayah" placeholder="Daerah Yang Terkena Pemadaman" rows="8"><?php echo $wilayah; ?></textarea>								
								<span style="color: red">
									<?php echo form_error('wilayah'); ?>
								</span>
							</div>
							<div class="row">
								<div class="col-md-10"></div>
								<div class="text-right">
									<a href="<?php echo site_url('admin/pengumuman'); ?>">
										<button type="button" class="btn btn-primary pull-right">
										<i class="fas fa-arrow-left"></i> Kembali</button>
									</a>                                               

									<button type="submit" class="btn btn-success pull-right">
										<i class="far fa-save"></i> Save
									</button>
								</div>
							</div>
						</form>
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