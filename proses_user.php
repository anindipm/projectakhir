<?php
include "koneksi.php";
$db = new database();

$aksi = $_GET['aksi'];
	if ($aksi == "input_user"){
		$db->input_user ($_POST ['username'],$_POST['password'],$_POST['type']);
			header ("location:users.php");
	}else if($aksi == "login"){
		$db->masuk_user ($_POST ['username'],$_POST['password']);
			header ("location:users.php");
	}else if($aksi == "edit_user"){
		$db->edit_user($_POST['iduser'],$_POST['username'],$_POST['type'],$_POST['cek']);
			header ("location:users.php");
	}else if($aksi == "hapus_user"){
		$db->hapus_user($_GET['iduser']);
			header ("location:users.php");
	}else if($aksi == "cek_user"){
		$db->cek_user($_POST['username']);
	}
?>
