<?php
include "koneksi.php";
$db = new database();

$aksi = $_GET['aksi'];
	if ($aksi == "tambah_pelanggan"){
		$db->tambah_pelanggan ($_POST ['username'],$_POST['alamat'],$_POST['email'],$_POST['telepon']);
			header ("location:pelanggan.php");
	}else if($aksi == "edit_pelanggan"){
		$db->edit_pelanggan($_POST['idpelanggan'],$_POST['username'],$_POST['alamat'],$_POST['email'],$_POST['telepon']);
			header ("location:pelanggan.php");
	}else if($aksi == "hapus_pelanggan"){
		$db->hapus_pelanggan($_GET['idpelanggan']);
			header ("location:pelanggan.php");
	}
?>