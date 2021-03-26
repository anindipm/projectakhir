<html>
<head><title>Data Barang</title>
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
			<h2>Edit Data Barang</h2>
		</div>
<form action="proses_barang.php?aksi=edit_barang" method="post">

<?php
include "koneksi.php";
$db = new database();
$kode_barang = $_GET['kode_barang'];
if(!is_null($kode_barang)){
	$data_barang = $db->ambil_data_barang($kode_barang);
}		
?>
	<div class="container">
	<div class="row">
	<div class="col-sm">
	<br>
	
	<input type="hidden" name="kode_barang" value="<?php echo $kode_barang; ?>">
	
	
		<div class="form-group row justify-content-md-center">
		<label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
			<div class="col-6 col-sm-7">
				<input type="text" id="nama_barang" class="form-control" value="<?php echo $data_barang['nama_barang']; ?>" name="nama_barang" required>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="jenis_barang" class="col-sm-3 col-form-label">Jenis Barang</label>
			<div class="col-6 col-sm-7">
				<select name="jenis_barang" class="custom-select custom-select-sm">
					<?php $jenis_barang = $data_barang['jenis_barang']; ?>
						<option value="acc" <?php if($jenis_barang=="acc"){echo "selected";} ?>>Accessories</option>
						<option value="dslr" <?php if($jenis_barang=="dslr"){echo "selected";} ?>>DSLR</option>
					</select>
			</div>
		</div>

		
		<div class="form-group row justify-content-md-center">
		<label for="harga_barang" class="col-sm-3 col-form-label">Harga Sewa</label>
			<div class="col-6 col-sm-7">
				<input type="text" id="harga_barang" class="form-control" value="<?php echo $data_barang['harga_barang']; ?>" name="harga_barang" required>
			</div>
		</div>	
		
	<tr>
		<div class="row justify-content-md-center">
		<input type="submit" value="Update" class="btn btn-info">
	</tr>
</form>
</table>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</center>
</body>
</html>