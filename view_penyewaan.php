<div class="table-responsive">
		<table class="table table-striped">
		
		<hr>
			<thead>
			<tr>
				<th>No</th>
				<th>Nama Member</th>
				<th>Nama Barang</th>
				<th>Tanggal Penyewaan</th>
				<th>Lama Sewa</th>
				<th>Harga Sewa</th>
				<th>Aksi</th>
			</tr>
			</thead>
			
			<tbody>
			<?php
				$no=1;
				foreach($data_penyewaan as $row){
			?>
					<tr>
						<td><?php echo $nomor++; ?></td>
						<td><?php echo $row['nama']; ?></td>
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