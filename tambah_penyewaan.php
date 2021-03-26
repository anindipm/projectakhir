<html>
<head><title>Tambah</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<script type= "text/javascript" src="assets/js/bootstrap.min.js"></script> 
		<script type ="text/javascript" src="assets/js/bootstrap.js"></script>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<div class="container" style="margin-top:3%" >
	<div class="card text-center border-info mb-3 mx-auto" style="max-width: 620px;justify-content: center;" >
	<div class="card-header">

<h2>Sewa Camera / Accesories</h4>
<center>
</div>
		<div class="card-body">
		<div class="row">
		<div class="col-sm">
		
		<form action="proses_penyewaan.php?aksi=tambah_sewa" method="post">
<?php
include "koneksi.php";
$db = new database();
$kode_barang = $_GET['kode_barang'];
if(!is_null($kode_barang)){
	$data_barang = $db->ambil_data_barang($kode_barang);
}		
?>
		
		<div class="form-group row justify-content-md-center">
		<label for="nama" class="col-sm-3 col-form-label">Nama Member</label>
			<div class="col-6 col-sm-7">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="nama" value="" name="nama" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Masukkan Nama Member
			</div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
			<div class="col-6 col-sm-7">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="nama_barang" value="<?php echo $data_barang['nama_barang']; ?>"name="nama_barang" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Masukkan Nama Barang
			</div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="tgl_sewa" class="col-sm-3 col-form-label">Tanggal Sewa</label>
			<div class="col-6 col-sm-7">
			<div id="error_msg" align="center"></div>
			<input type="date" class="form-control" id="tgl_sewa" value="" name="tgl_sewa" autocomplete="off" required="">
			<div id="result"></div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="lama_sewa" class="col-sm-3 col-form-label">Lama Sewa</label>
			<div class="col-6 col-sm-7">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="lama_sewa" value="" name="lama_sewa" autocomplete="off" required="">
			<div id="result"></div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="harga_sewa" class="col-sm-3 col-form-label">Harga Sewa</label>
			<div class="col-6 col-sm-7">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="harga_sewa" value="<?php echo $data_barang['harga_barang']; ?>" name="harga_sewa" autocomplete="off" required="">
			<div id="result"></div>
			<span></span>
			</div>
		</div>

	
		<div class="row justify-content-md-center">
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<input type="submit" value="Simpan" class="btn btn-info">
		</div>
	
</table>
<form>
</center>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</div>
</html>