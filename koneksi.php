<?php
date_default_timezone_set("Asia/Jakarta");
class database{
	var $host = "localhost";
	var $uname = "root";
	var $passw = "";
	var $db = "sewabarang";
	
	function __construct(){
		$this->koneksi = mysqli_connect(
			$this->host,
			$this->uname,
			$this->passw,
			$this->db);
			
		if(!$this->koneksi){
			echo "koneksi database gagal";
		}
	}
	
	function input_user($username,$password,$type){
		$hariini = date("Y-m-d H:i:s");
		mysqli_query($this->koneksi,"insert into users(username,password,register,type,cek) values ('$username','$password','$hariini','$type','0')");
	}
	function daftar_user($username,$password){
		mysqli_query($this->koneksi,"insert into users(username,password) values ('$username','$password')");
	}
	function edit_user($iduser,$username,$password,$type,$cek){
		mysqli_query($this->koneksi, "update users set username='$username', password='$password', type='$type', cek='$cek' where iduser='$iduser'");
	}
	function ambil_data_user($iduser){
		$data = mysqli_query($this->koneksi,"select * from users where iduser='$iduser'");
		return $data->fetch_array();
	}
	function hapus_user($iduser){
		mysqli_query($this->koneksi,"delete from users where iduser='$iduser'");
	}


	function tambah_pelanggan($username,$alamat,$email,$telepon){
		mysqli_query($this->koneksi,"insert into pelanggan(username,alamat,email,telepon) values ('$username','$alamat','$email','$telepon')");
	}
	function edit_pelanggan($idpelanggan,$username,$alamat,$email,$telepon){
		mysqli_query($this->koneksi, "update pelanggan set username='$username', alamat='$alamat', email='$email', telepon='$telepon' where idpelanggan='$idpelanggan'");
	}
	function ambil_data_pelanggan($idpelanggan){
		$data = mysqli_query($this->koneksi,"select * from pelanggan where idpelanggan='$idpelanggan'");
		return $data->fetch_array();
	}
	function hapus_pelanggan($idpelanggan){
		mysqli_query($this->koneksi,"delete from pelanggan where idpelanggan='$idpelanggan'");
	}
	

	function tambah_sewa($nama,$nama_barang,$tgl_sewa,$lama_sewa,$harga_sewa){
		mysqli_query($this->koneksi,"insert into penyewaan(nama,nama_barang,tgl_sewa,lama_sewa,harga_sewa) values ('$nama','$nama_barang','$tgl_sewa','$lama_sewa','$harga_sewa')");
	}
	function edit_sewa($kode_barang,$nama,$nama_barang,$tgl_sewa,$lama_sewa,$harga_sewa){
		mysqli_query($this->koneksi, "update penyewaan set nama='$nama', nama_barang='$nama_barang', tgl_sewa='$tgl_sewa', lama_sewa='$lama_sewa', harga_sewa='$harga_sewa' 
		where kode_barang='$kode_barang'");
	}
	function ambil_data_penyewaan($kode_barang){
		$data = mysqli_query($this->koneksi,"select * from penyewaan where kode_barang='$kode_barang'");
		return $data->fetch_array();
	}
	function hapus_sewa($kode_barang){
		mysqli_query($this->koneksi,"delete from penyewaan where kode_barang='$kode_barang'");
	}
	
	
	function tambah_barang($nama_barang,$jenis_barang,$harga_barang){
		mysqli_query($this->koneksi,"insert into barang(nama_barang,jenis_barang,harga_barang) values ('$nama_barang','$jenis_barang','$harga_barang')");
	}
	function edit_barang($kode_barang,$nama_barang,$jenis_barang,$harga_barang){
		mysqli_query($this->koneksi, "update barang set nama_barang='$nama_barang', jenis_barang='$jenis_barang', harga_barang='$harga_barang'
		where kode_barang='$kode_barang'");
	}
	function ambil_data_barang($kode_barang){
		$data = mysqli_query($this->koneksi,"select * from barang where kode_barang='$kode_barang'");
		return $data->fetch_array();
	}
	function hapus_barang($kode_barang){
		mysqli_query($this->koneksi,"delete from barang where kode_barang='$kode_barang'");
	}
	
	
	function tambah_data($nama_barang,$tgl_sewa,$total_sewa){
		mysqli_query($this->koneksi,"insert into data(nama_barang,tgl_sewa,total_sewa) values ('$nama_barang','$tgl_sewa','$total_sewa')");
	}
	function ambil_data_data($kode_barang){
		$data = mysqli_query($this->koneksi,"select * from data where kode_barang='$kode_barang'");
		return $data->fetch_array();
	}
	function hapus_data($kode_barang){
		mysqli_query($this->koneksi,"delete from data where kode_barang='$kode_barang'");
	}
	

	function login($username,$password){
		$query = mysqli_query($this->koneksi,"select * from users where username='$username' and password='$password'");
		$data_user = $query->fetch_array();
		$jml = $query->num_rows;
		if($jml == 1){
			setcookie('username', $username, time() + (60*60*24*5),'/');
			setcookie('iduser', $data_user['iduser'], time() + (60*60*24*5),'/');
			$_SESSION['username'] = $username;
			$_SESSION['iduser'] = $data_user['iduser'];
			$_SESSION['jenis'] = $data_user['jenis'];
			$_SESSION['is_login'] =TRUE;
			$this->update_lastlogin($data_user['iduser']);
			return TRUE;
		}else{
			return FALSE;
		}
	}

	
	
	function update_lastlogin($iduser){
		$hariini = date("Y-m-d H:i:s");
		$query = mysqli_query ($this-> koneksi,"Update users set lastlogin ='$hariini' where iduser='$iduser' ");
		return $query;
	}
	
	function logout(){
		$_SESSION['is_login'] = FALSE;
		session_start();
		session_unset();
		session_destroy();
		setcookie('username', '', 0, '/');
		setcookie('iduser', '', 0, '/');
		session_destroy();
	}
	
	function tampil_user(){
		$query = mysqli_query($this->koneksi,"select * from users");
		$data = $query->num_rows;
		return $data;
	}
	function tampil_users_paging($awal,$batas){
		$data = mysqli_query($this->koneksi, "select*from users order by lastlogin desc limit $awal, $batas");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		$jml = $data->num_rows;
		if ($jml != 0){
		return $hasil;
		}
	}
	function tampil_penyewaan(){
		$query = mysqli_query($this->koneksi,"select * from penyewaan");
		$data = $query->num_rows;
		return $data;
	}
	function tampil_sewa_paging($awal,$batas){
		$data = mysqli_query($this->koneksi, "select*from penyewaan order by kode_barang asc limit $awal, $batas");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		$jml = $data->num_rows;
		if ($jml != 0){
		return $hasil;
		}
	}
	
	
	function tampil_pelanggan(){
		$query = mysqli_query($this->koneksi,"select * from pelanggan");
		$data = $query->num_rows;
		return $data;
	}
	function tampil_pelanggan_paging($awal,$batas){
		$data = mysqli_query($this->koneksi, "select*from pelanggan order by idpelanggan asc limit $awal, $batas");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		$jml = $data->num_rows;
		if ($jml != 0){
		return $hasil;
		}
	}
	
	
	function tampil_data(){
		$query = mysqli_query($this->koneksi,"select * from data");
		$data = $query->num_rows;
		return $data;
	}
	function tampil_data_paging($awal,$batas){
		$data = mysqli_query($this->koneksi, "select*from data order by kode_barang asc limit $awal, $batas");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		$jml = $data->num_rows;
		if ($jml != 0){
		return $hasil;
		}
	}
	
	
	function tampil_barang(){
		$query = mysqli_query($this->koneksi,"select * from barang");
		$data = $query->num_rows;
		return $data;
	}
	function tampil_barang_paging($awal,$batas){
		$data = mysqli_query($this->koneksi, "select*from barang order by kode_barang asc limit $awal, $batas");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		$jml = $data->num_rows;
		if ($jml != 0){
		return $hasil;
		}
	}
}
?>
