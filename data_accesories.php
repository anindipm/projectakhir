<?php

	session_start();
	include "koneksi.php";
	$db = new database();
	
	if(isset($_GET['q'])){
		$db->logout();
		header("location:index.php");
	}
?>
<html>
<head>
  <title>Sewa Camera</title>
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
				<a class='nav-link active' href="data_accesories.php">Accesories</a>
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
				<a class='nav-link' href="penyewaan.php">Penyewaan</a>
		</li>
        
        </ul>
        <a href="?q=logout" onclick='return confirm("Apakah Yakin Ingin Logout?")' class="btn btn-outline-danger">Keluar</a>
		</div>
	</div>
</nav>
<!--Main Navigation-->


<div class="container text-center">    
<h1>CANON</h1><br>
  <div class="row">
    <div class="col-sm-3">
      <img src="flash-canon-speedlite-600ex.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h5>Flash Canon Speedlite 600EX</h5></p>
    </div>
    <div class="col-sm-3"> 
      <img src="flash-canon-speedlite-600ex-rt.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h5>Flash Canon Speedlite 600EX-RT</h5></p>    
    </div>
    <div class="col-sm-3"> 
      <img src="flash-nikon-speedlight-sb-700.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h5>Flash Nikon Speedlight SB-700</h5></p>    
    </div>
	<div class="col-sm-3"> 
      <img src="flash-nikon-speedlight-sb-910.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h5>Flash Nikon Speedlight SB-910</h5></p>    
    </div>
	<div class="col-sm-3"> 
      <img src="anon-bg-e7-battery-grip.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h5>Canon BG-E7 Battery Grip</h5></p>    
    </div>
	<div class="col-sm-3"> 
      <img src="canon-bg-e11-battery-grip-for-canon-5d-iii.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h5>Canon BG-E11 Battery Grip (for Canon 5D III)</h5></p>    
    </div>
	<div class="col-sm-3"> 
      <img src="canon-bg-e13-battery-grip.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><h5>Canon BG E13 Battery Grip</h5></p>    
    </div>
	
</div><br>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>
