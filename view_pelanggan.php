<div class="table-responsive">
		<table class="table table-striped">
		<a href="tambah_pelanggan.php" class="btn btn-primary">Tambah</a>
		
		<hr>
			<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Email</th>
				<th>Telepon</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<tbody>
			
			<?php
				$no=1;
				foreach($data_pelanggan as $row){
			?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['alamat']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['telepon']; ?></td>
						<td>
						<a class="btn btn-info" a href="edit_pelanggan.php?aksi=edit_pelanggan&idpelanggan=<?php echo $row['idpelanggan']; ?>">Edit</a>
							<a class="btn btn-dark" a href="proses_pelanggan.php?aksi=hapus_pelanggan&idpelanggan=
							<?php echo $row['idpelanggan']; ?>
							"onclick='return confirm("Apakah Yakin Ingin Menghapus?")'>Hapus</a>
							<?php
								$no++;
								}
							?>
						</td>
						
						</tr>
				</tbody>
			</table>
			<nav>
				<ul class="pagination justify-content-center">
					<li class="page-item">
						<a class="page-link" <?php if($halaman > 1) {echo "href='?halaman=$previous'";} ?>>Previous</a>
					</li>
					<?php
					for($x=1;$x<=$total_halaman;$x++){
						?>
						<li class="page-item"><a class="page-link" href="?halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
						<?php
					}
					?>
					<li class="page-item">
						<a class="page-link" <?php if($halaman < $total_halaman) {echo "href='?halaman=$next'";} ?>>Next</a>
					</li>
				</ul>
			</nav>
		</div>