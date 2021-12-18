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

				<!--
				karena ini halaman overview (home), kita matikan partial breadcrumb.
				Jika anda ingin mengampilkan breadcrumb di halaman overview,
				silahkan hilangkan komentar (//) di tag PHP di bawah.
        		-->
				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- Notifikasi data berhasil di simpan -->
				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success alert-dismissable" role="alert">
					<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Icon Cards-->
				<div class="row">
        <div class="col-xl-6 col-sm-6 mb-4">
						<div class="card text-white bg-primary o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-list"></i>d
								</div>
								<h4>Jumlah Pelanggan</h4>
								<h2><?php echo $jumlah_pelanggan ?> Pelanggan</h2>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/user'); ?>">
								<span class="float-left">Lihat Data Pelanggan</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
						</div>
					</div>
					<div class="col-xl-6 col-sm-6 mb-4">
						<div class="card text-white bg-warning o-hidden h-100">
							<div class="card-body">
								<div class="card-body-icon">
									<i class="fas fa-fw fa-list"></i>
								</div>
								<h4>Jumlah Pengumuman Pemadaman</h4>
								<h2><?php echo $jumlah_pengumuman; ?> Buah</h2>
							</div>
							<a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('admin/pengumuman'); ?>">
								<span class="float-left">Lihat Data Pengumuman</span>
								<span class="float-right">
									<i class="fas fa-angle-right"></i>
								</span>
							</a>
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
