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
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/pengumuman/add'); ?>">
							<i class="fas fa-plus"></i> Tambah
						</a>
					</div>

					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<td>No.</td>
										<td>Tanggal</td>
										<td>Waktu</td>
										<td>Penyebab Pemadaman</td>										
										<td>Wilayah yang terkena Pemadaman</td>
										<td>Aksi</td>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no=1;
										foreach($pengumuman as $pengumuman): 
									?>
									<tr>
										<td>
											<?php echo $no; ?>
										</td>
										<td>
											<?php echo $pengumuman->tanggal; ?>
										</td>
										<td>
											<?php echo $pengumuman->waktu; ?>
										</td>
										<td>
											<?php echo $pengumuman->penyebab; ?>
										</td>
										<td>
											<?php echo $pengumuman->wilayah; ?>
										</td>
										<td width="300">
											<a href="<?php echo site_url('admin/pengumuman/detail/'.$pengumuman->id_pengumuman); ?>" class="btn btn-info">
												<i class="fas fa-eye"></i> Detail
											</a>
											<a href="<?php echo site_url('admin/pengumuman/edit/'.$pengumuman->id_pengumuman); ?>" class="btn btn-primary">
												<i class="fas fa-edit"></i> Edit
											</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/pengumuman/delete/'.$pengumuman->id_pengumuman); ?>')"
											 href="#!" class="btn btn-small btn-danger">
												<i class="fas fa-trash"></i> Hapus
											</a>
										</td>
									</tr>
									<?php
										$no++;
										endforeach;
									?>
								</tbody>
							</table>
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

	<script>
	function deleteConfirm(url) {
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>