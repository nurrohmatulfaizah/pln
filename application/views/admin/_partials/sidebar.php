<!-- Sidebar -->
<ul class="sidebar navbar-nav">
	<!-- Main Menu - Dashboard -->
	<li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active' : '' ?>">
		<a class="nav-link" href="<?php echo site_url('admin/overview'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span>
		</a>
	</li>
		<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'pengumuman' ?  'active' : ''?>">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
		aria-expanded="false">
			<i class="fas fa-fw fa-comment-alt"></i>
			<span>Pengumuman</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('admin/pengumuman/add'); ?>">Tambah Pengumuman</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/pengumuman'); ?>">Daftar Pengumuman</a>
		</div>
	</li>
	</li>
		<li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'user' ?  'active' : ''?>">
		<a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
		aria-expanded="false">
			<i class="fas fa-fw fa-users"></i>
			<span>Pelanggan</span>
		</a>
		<div class="dropdown-menu" aria-labelledby="pagesDropdown">
			<a class="dropdown-item" href="<?php echo site_url('admin/user/add'); ?>">Tambah Pelanggan</a>
			<a class="dropdown-item" href="<?php echo site_url('admin/user'); ?>">Daftar Pelanggan</a>
		</div>
	</li>	
</ul>
