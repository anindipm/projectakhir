<?php

	session_start();
	include "koneksi.php";
	$db = new database();
	$data_penyewaan = $db->tampil_penyewaan();
	

?>

<html>

	<head><title>Data Penyewaan</title>
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
			<h2>Data Penyewaan</h2>
		</div>
			<div class="col-md-1">
				<a href="?q=logout" onclick='return confirm("Apakah Yakin Ingin Logout?")' class="btn btn-danger">Keluar</a>
		</div>
		</div>
		</div>
			<div class="card-body">
			<div class="table-responsive">
		<table class="table table-striped">
			<a href="tambah_penyewaan.php" class="btn btn-primary">Tambah Data</a>		
			<hr>
			<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Tanggal Penyewaan</th>
				<th>Lama Sewa</th>
				<th>Harga Sewa</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<?php
				$no=1;
				foreach($data_penyewaan as $row){
			?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $row['nama_barang']; ?></td>
						<td><?php echo $row['tgl_sewa']; ?></td>
						<td><?php echo $row['lama_sewa']; ?></td>
						<td><?php echo $row['harga_sewa']; ?></td>
						<td>
							<a class="btn btn-info" a href="edit_penyewaan.php?aksi=edit_sewa&kode_barang=<?php echo $row['kode_barang']; ?>">Edit</a>
							<a class="btn btn-dark" a href="proses_penyewaan.php?aksi=hapus_sewa&kode_barang=
							<?php echo $row['kode_barang']; ?>
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