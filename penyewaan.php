<?php

	session_start();
	include "koneksi.php";
	$db = new database();
	$data_penyewaan = $db->tampil_penyewaan();
	$iduser = $_SESSION['iduser'];
	$username = $_SESSION['username'];
	
	if(!isset($_SESSION['is_login'])){
		header("location:login.php");
	
	}
	
	if(isset($_GET['q'])){
		$db->logout();
		header("location:index.php");
	}
?>
<html>
<head><title>Penyewaan</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type= "text/javascript" src="assets/js/bootstrap.min.js"></script> 
	<script type ="text/javascript" src="assets/js/bootstrap.js"></script>

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
		<a class="navbar-brand" href="halaman_utama.php">SEWA CAMERA</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
		
		<li class="nav-item">
				<a class='nav-link' href="data_camera.php">Camera</a>
		</li>
        <li class="nav-item">
				<a class='nav-link' href="data_accesories.php">Accesories</a>
		</li>
        <li class="nav-item">
				<a class='nav-link' href="users.php">User</a>
		</li>
        <li class="nav-item">
				<a class='nav-link' href="pelanggan.php">Pelanggan</a>
		</li>
        <li class="nav-item">
				<a class='nav-link' href="barang.php">Barang</a>
		</li>
        <li class="nav-item">
				<a class='nav-link active' href="penyewaan.php">Penyewaan</a>
		</li>
        
        </ul>
        <a href="?q=logout" onclick='return confirm("Apakah Yakin Ingin Logout?")' class="btn btn-outline-danger">Keluar</a>
		</div>
	</div>
</nav>

	<style>	
		body
		{
			background-image: url('gambar3.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
	<div class="container" style="margin-top:3%">
	<div class="card mx-auto border-info">
    <div class="card-header">
	 	<div class="row">
		<br/>
			<div class="col-xs-6 col-sm-6">
	   		<h2>Data Sewa</h2>
		</div>
	    </div>
	 </div>
	
	<div class="container-fluid" style="margin-top">
		<div class="card-body">
		<div class="table-responsive">

			<?php
				$batas = 4;
				$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;
				$previous = $halaman - 1;
				$next = $halaman + 1;
				$data_penyewaan = $db->tampil_penyewaan();
				$jumlah_data = $data_penyewaan;
				$total_halaman = ceil($jumlah_data / $batas);
				$data_penyewaan = $db->tampil_sewa_paging($halaman_awal,$batas);
				$nomor = $halaman_awal+1;
				if($jumlah_data!=0){
					include "view_penyewaan.php";
				}else{
					echo "<br><br><h3>Data Anda Kosong</h3>";
				}
			?>
		</div>
	</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
