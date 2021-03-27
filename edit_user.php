<html>
<head><title>Data Users</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
		<script type= "text/javascript" src="assets/js/bootstrap.min.js"></script> 
		<script type ="text/javascript" src="assets/js/bootstrap.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
	<div class="container" style="margin-top:3%" >
		<div class="card text-center border-info mb-3 mx-auto" style="max-width: 620px;justify-content: center;" >
		<div class="card-header">
			<h2>Edit Data User</h2>
		</div>
		
<form action="proses_user.php?aksi=edit_user" method="post">
<?php
include "koneksi.php";
$db = new database();
$iduser = $_GET['iduser'];
if(!is_null($iduser)){
	$data_user = $db->ambil_data_user($iduser);
}
?>

	<div class="container">
	<div class="row">
	<div class="col-sm">
	<br>
	<input type="hidden" name="iduser" value="<?php echo $iduser; ?>">
		<div class="form-group row justify-content-md-center">
		<label for="username" class="col-sm-2 col-form-label">Nama</label>
			<div class="col-6 col-sm-7">
		<input type="text" id="username" class="form-control" value="<?php echo $data_user['username']; ?>" name="username" required>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="password" class="col-sm-2 col-form-label">Password</label>
			<div class="col-6 col-sm-7">
		<input type="text" id="password" class="form-control" value="<?php echo $data_user['password']; ?>" name="password" required>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
			<label for="type" class="col-sm-2 col-form-label">Tipe</label>
			<div class="col-6 col-sm-7">
					<select name="type" class="custom-select custom-select-sm">
						<?php $type = $data_user['type']; ?>
							<option value="A" <?php if($type=="A"){echo "selected";} ?>>Admin</option>
							<option value="U" <?php if($type=="U"){echo "selected";} ?>>User</option>
					</select>
		</div>
		</div>
	<div class="form-group row justify-content-md-center">
		<label for="cek" class="col-sm-2 col-form-label">Cek</label>
			<div class="col-6 col-sm-7">
			<select name="cek" class="custom-select custom-select-sm" id="cek">
			<?php $type = $data_user['cek']; ?>
				<option value="0" <?php if($type=="0"){echo "selected";} ?>>Isi Data</option>
				<option value="1" <?php if($type=="1"){echo "selected";} ?>>Lengkap</option>
				<option value="-" <?php if($type=="-"){echo "selected";} ?>>Blokir</option>
			</select>
		</select>
		</div>
    </div>					
	
	<tr>
		<div class="row justify-content-md-center">
		<input type="submit" value="Update" class="btn btn-info">
	</tr>
</form>
</table>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</center>
</body>
</html>
