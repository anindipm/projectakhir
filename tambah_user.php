<html>
<head><title>Tambah User</title>
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
<h2>Daftar</h2>
<center>
</div>
		<div class="card-body">
		<div class="row">
		<div class="col-sm">
		
		<form action="proses_user.php?aksi=input_user" method="post">

		<div class="form-group row justify-content-md-center">
		<label for="username" class="col-sm-2 col-form-label">Username</label>
			<div class="col-6 col-sm-7">
			<div id="error_msg" align="center"></div>
			<input type="text" class="form-control" id="username" value="" name="username" autocomplete="off" required="">
			<div id="result"></div>
			<div class="invalid-feedback">
				Silakan Masukkan Username Anda
			</div>
			<span></span>
			</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
		<label for="password" class="col-sm-2 col-form-label">Password</label>
			<div class="col-6 col-sm-7">
			<div id="error_msg" align="center"></div>
			<input type="password" class="form-control" id="password" value="" name="password" autocomplete="off" required>
			<div class="invalid-feedback">Silahkan Masukan Password Anda</div>
			<span></span>
		</div>
		</div>
		
		<div class="form-group row justify-content-md-center">
				<label for="type" class="col-sm-2 col-form-label">Tipe</label>
			<div class="col-6 col-sm-7">
				<select name="type" class="custom-select custom-select-sm" id="type">
					<option value="A">Admin</option>
					<option value="U">User</option>
				</select>
		</div>
		</div>
			
		
	<tr>
		<div class="row justify-content-md-center">
		
		<input class="btn btn-success" style="margin-right:2%;" action="action" onclick="window.history.go(-1); return false;" type="submit" value="&lt;&lt; Kembali">
		<input type="submit" value="Simpan" class="btn btn-info">
		</div>
	</tr>
</table>
<form>
</center>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>