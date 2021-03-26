<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">Sewa Barang</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link " href="halaman_utama.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Home'); ">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="data_camera.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Camera');">Camera</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="data_accesories.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Accessories');">Accessories</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="users.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'User');">User</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="pelanggan.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Pelanggan');">Pelanggan</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="barang.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Barang');">Barang</a>
				</li>
				<li class="nav-item">
				<a class="nav-link " href="penyewaan.php" onclick="ga('send', 'event', 'Navbar', 'Community links', 'Persewaan');">Persewaan</a>
				</li>
        
        </ul>
        <a href="?q=logout" onclick='return confirm("Apakah Yakin Ingin Logout?")' class="btn btn-outline-danger">Keluar</a>
      </div>
    </div>
  </nav>