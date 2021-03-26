<?php

	session_start();
	include "koneksi.php";
	$db = new database();
	$data_users = $db->tampil_user();
	$iduser = $_SESSION['iduser'];
	$username = $_SESSION['username'];
	$jenis_user = $_SESSION['jenis'];
	
	if(!isset($_SESSION['is_login'])){
		header("location:login.php");
	
	}
	if(isset($_GET['q'])){
		$db->logout();
		header("location:login.php");
	}
	
?>

<html>

	<head><title>Data Users</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
<script type= "text/javascript" src="assets/js/bootstrap.min.js"></script> 
<script type ="text/javascript" src="assets/js/bootstrap.js"></script>
	</head>
		
	<body>
		<div class="container" style="margin-top:3%" >
		<div class="card">
		<div class="card-header">
		<div class="row">
		<div class="col-md-11">
	<br><br>
			<h2>Data Users</h2>
		</div>
			
		</div>
		</div>
			<div class="card-body">
			<div class="table-responsive">
		<table class="table table-striped">
			<a href="tambah_user.php" class="btn btn-primary">Tambah</a>	
			<hr>
			<thead>
			<tr>
				<th>No</th>
				<th>ID User</th>
				<th>Username</th>
				<th>Terdaftar</th>
				<th>Login Terakhir</th>
				<th>Tipe</th>
				<th>Cek</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<?php
				$no=1;
				foreach($data_users as $row){
			?>
						<tr>
						<?php
							$cektype = $row['type'];
							if($cektype=='A'){
								$typenya="Admin";
							}else{
								$typenya="User";
							}
							$cekcek = $row['cek'];
							if($cekcek=="0"){
								$ceknya="Belum Isi Data";
							}else if($cekcek=="1"){
								$ceknya="OK";
							}else{
								$ceknya="Blokir";
							}
						?>
						
						<td><?php echo $no; ?></td>
						<td><?php echo $row['iduser']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['register']; ?></td>
						<td><?php echo $row['lastlogin']; ?></td>
						<td><?php echo $typenya; ?></td>
						<td><?php echo $ceknya; ?></td>
						<td>
							<a class="btn btn-info" a href="edit_user.php?aksi=edit_user&iduser=<?php echo $row['iduser']; ?>">Edit</a>
							<a class="btn btn-dark" a href="proses_user.php?aksi=hapus_user&iduser=
							<?php echo $row['iduser']; ?>
							"onclick='return confirm("Apakah Yakin Ingin Menghapus?")'>Hapus</a>
							<?php
								$no++;
								}
							?>
						</td>
						
						</tr>
			</table>
			</div>
			</div>
			</div>
			</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	</body>
</html>