<!DOCTYPE html>
<html lang="zxx">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/logo.png" type="image/png">

	<title>PLN</title>

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">

	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/slicknav.min.css" />

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css2/bootstrap.min.css" />
	<link rel="stylesheet" href="css2/font-awesome.min.css" />
	<link rel="stylesheet" href="css2/owl.carousel.min.css" />
	<link rel="stylesheet" href="css2/slicknav.min.css" />

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css2/style.css" />


</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	<header class="header_area">
		<div class="header-top">
			<div class="container">

			</div>
		</div>
		</div>
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">

							<li class="nav-item active">
								<a class="nav-link navbar-brand" href="<?php echo base_url('home'); ?>">Home</a>
								<a href="<?php echo base_url('login') ?>" class="nav-link navbar-brand">Login</a>
							</li>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<div class="hero-slider owl-carousel">
		<div class="hs-item">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="hs-text">
							<h2>Website<br><span>Manajemen Data</span><br>Pelanggan PLN</h2>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="hr-img">
							<img src="img/pln.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table">
				<thead>
					<br>
					<h2 align="center">Pengumuman Pemadaman Listrik PLN</h2>
					<br><br>
					<tr>
						<td>No.</td>
						<td>Tanggal</td>
						<td>Waktu Pemadaman</td>
						<td>Penyebab</td>
						<td>Wilayah yang terkena Pemadaman</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($pengumuman as $pengumuman) :
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
	<br><br>
	<div class="footer-bottom">

		<div class="container">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<p class="footer-text">
					<a>Nur Rohmatul Faizah 12201303</a>
				</p>
			</div>
		</div>
	</div>
	</footer>
	<script src="js2/jquery-3.2.1.min.js"></script>
	<script src="js2/bootstrap.min.js"></script>
	<script src="js2/jquery.slicknav.min.js"></script>
	<script src="js2/owl.carousel.min.js"></script>
	<script src="js2/mixitup.min.js"></script>
	<script src="js2/main.js"></script>

</body>

</html>