<html>
<head><title>Data Pelanggan</title>
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
			<h2>Edit Data Pelanggan</h2>
		</div>
<form action="proses_pelanggan.php?aksi=edit_pelanggan" method="post">

<?php
include "koneksi.php";
$db = new database();
$idpelanggan = $_GET['idpelanggan'];
if(!is_null($idpelanggan)){
	$data_pelanggan = $db->ambil_data_pelanggan($idpelanggan);
	
	
}	
?>
	<div class="container">
	<div class="row">
	<div class="col-sm">
	<br>
	<input type="hidden" name="idpelanggan" value="<?php echo $idpelanggan; ?>">
	
		<div class="form-group row justify-content-md-center">
			<label for="username" class="col-sm-3 col-form-label">Nama</label>
			<div class="col-6 col-sm-7">
				<input type="text" id="username" class="form-control" value="<?php echo $data_pelanggan['username']; ?>" name="username" required>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
			<label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
			<div class="col-6 col-sm-7">
				<input type="text" id="alamat" class="form-control" value="<?php echo $data_pelanggan['alamat']; ?>" name="alamat" required>
			</div>
		</div>

		
		<div class="form-group row justify-content-md-center">
			<label for="email" class="col-sm-3 col-form-label">Email</label>
			<div class="col-6 col-sm-7">
				<input type="text" id="email" class="form-control" value="<?php echo $data_pelanggan['email']; ?>" name="email" required>
			</div>
		</div>	
		
		<div class="form-group row justify-content-md-center">
			<label for="telepon" class="col-sm-3 col-form-label">Telepon</label>
			<div class="col-6 col-sm-7">
				<input type="number" id="telepon" class="form-control" value="<?php echo $data_pelanggan['telepon']; ?>" name="telepon" required>
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