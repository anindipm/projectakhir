<?php
include "koneksi.php";
$db = new database();

$aksi = $_GET['aksi'];
	if ($aksi == "tambah_sewa"){
		$db->tambah_sewa ($_POST ['nama'],$_POST ['nama_barang'],$_POST['tgl_sewa'],$_POST['lama_sewa'],$_POST['harga_sewa']);
			header ("location:penyewaan.php");
	}else if($aksi == "edit_sewa"){
		$db->edit_sewa($_POST['kode_barang'],$_POST['nama'],$_POST['nama_barang'],$_POST['tgl_sewa'],$_POST['lama_sewa'],$_POST['harga_sewa']);
			header ("location:penyewaan.php");
	}else if($aksi == "hapus_sewa"){
		$db->hapus_sewa($_GET['kode_barang']);
			header ("location:penyewaan.php");
	}
?>