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
					<div class="alert alert-primary" role="alert">	
						<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
						<?php echo $this->session->flashdata('success'); ?>
					</div>
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
				<?php endif; ?>			

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						Tambah Data Data Pelanggan
						<!-- <a href="<?php //echo site_url('admin/user'); ?>">
							<i class="fas fa-arrow-left"></i> Kembali
						</a> -->
					</div>

					<div class="card-body">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-8">
									<form action="<?php echo site_url('admin/user/add'); ?>" method="post" enctype="multipart/form-data">						

										<div class="row">
											<div class="col-md-2">
												<label for="nama">Nama Lengkap*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" placeholder="Nama Lengkap">
												<span style="color: red">
													<?php echo form_error('nama'); ?>
												</span>
											</div>
										</div>
										<br>			

										<div class="row">
											<div class="col-md-2">
												<label for="email">Email*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email">
												<span style="color: red">
													<?php echo form_error('email'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="alamat">Alamat Tinggal*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<textarea class="form-control" name="alamat" placeholder="Alamat Tinggal"><?php echo $alamat; ?></textarea>
												<span style="color: red">
													<?php echo form_error('alamat'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="no_telp">No. Telp*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="no_telp" value="<?php echo $no_telp; ?>" placeholder="No. Telephone">
												<span style="color: red">
													<?php echo form_error('no_telp'); ?>
												</span>
											</div>
										</div>
										<br>		

										<div class="row">
											<div class="col-md-2">
												<label for="rayon">Rayon*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="rayon" placeholder="Rayon" value="<?php echo $rayon; ?>">
												<span style="color: red">
													<?php echo form_error('rayon'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="golongan">Golongan*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="golongan" placeholder="Golongan" value="<?php echo $golongan; ?>">
												<span style="color: red">
													<?php echo form_error('golongan'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="tarif">Tarif / Per KWH*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="tarif" placeholder="Tarif" value="<?php echo $tarif; ?>">
												<span style="color: red">
													<?php echo form_error('tarif'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="daya">Daya*</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="text" class="form-control" name="daya" placeholder="Daya" value="<?php echo $daya; ?>">
												<span style="color: red">
													<?php echo form_error('daya'); ?>
												</span>
											</div>
										</div>
										<br>

										<div class="row">
											<div class="col-md-2">
												<label for="foto">Foto Rumah</label>
											</div>
											<div class="col-md-1">:</div>
											<div class="col-md-8">
												<input type="file" class="form-control-file" name="foto">
												<span style="color: red">
													<?php echo form_error('foto'); ?>
												</span>
											</div>
										</div>
										<br>																

										<div class="row">
											<div class="col-md-8"></div>
											<div class="text-right">                                            
												<a href="<?php echo site_url('admin/user'); ?>">
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
								<div class="col-md-3"></div>
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