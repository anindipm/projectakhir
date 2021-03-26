<?php
include "koneksi.php";
$db = new database();

$aksi = $_GET['aksi'];
	if ($aksi == "tambah_barang"){
		$db->tambah_barang ($_POST ['nama_barang'],$_POST['jenis_barang'],$_POST['harga_barang']);
			header ("location:barang.php");
	}else if($aksi == "edit_barang"){
		$db->edit_barang($_POST ['kode_barang'],$_POST['nama_barang'],$_POST['jenis_barang'],$_POST['harga_barang']);
			header ("location:barang.php");
	}else if($aksi == "hapus_barang"){
		$db->hapus_barang($_GET['kode_barang']);
			header ("location:barang.php");
	}
?>