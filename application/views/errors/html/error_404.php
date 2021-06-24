<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>404 HTML Template by Colorlib</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
	<style>
		.aaee{
			background-image: url(<?php echo base_url("assets/img/indoke.png"); ?>);
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>

<body>
	<div id="notfound" class="aaee">
		<div class="notfound">
			<div class="notfound-404">
				<h1>Oops!</h1>
				<h2>Halaman Yang Anda Akses Tidak Ditemukan</h2>
			</div>
			<a href="<?= site_url('/') ?>">Kembali Ke Beranda</a>
		</div>
	</div>

</body>

</html>