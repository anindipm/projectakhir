<div class="table-responsive">
		<table class="table table-striped">
		<a href="tambah_barang.php" class="btn btn-primary">Tambah</a>
		
		<hr>
			<thead>
			<tr>
				<th>No</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Jenis Barang</th>
				<th>Harga Barang</th>
				<th>Aksi</th>
			</tr>
			</thead>
			<?php
				$no=1;
				foreach($data_barang as $row){
			?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $row['kode_barang']; ?></td>
						<td><?php echo $row['nama_barang']; ?></td>
						
						<?php
							$cekjenis_barang = $row['jenis_barang'];
						if($cekjenis_barang=='acc'){
							$jenis_barangnya="Accessories";
						}else{
							$jenis_barangnya="DSLR";
						}
						?>
						<td><?php echo $jenis_barangnya; ?></td>
						<td><?php echo $row['harga_barang']; ?></td>
						
						<td>
							<a class="btn btn-primary" a href="tambah_penyewaan.php?kode_barang=<?php echo $row['kode_barang']; ?>">Sewa</a>
							<a class="btn btn-info" a href="edit_barang.php?aksi=edit_barang&kode_barang=<?php echo $row['kode_barang']; ?>">Edit</a>
							<a class="btn btn-dark" a href="proses_barang.php?aksi=hapus_barang&kode_barang=
							<?php echo $row['kode_barang']; ?>
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