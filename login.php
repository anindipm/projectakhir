<?php
session_start();
include "koneksi.php";
$db = new database();

if(isset($_SESSION['is_login'])){
	header('location:users.php');
}

if(isset($_REQUEST['login'])){
	extract($_REQUEST);
	$login = $db->login($username,$password);
	if($login){
		header("location:halaman_utama.php");
	}else{
		header("location:login.php?pesan=gagal");
	}
}

?>
<html>
<head><title>Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script type= "text/javascript" src="assets/js/bootstrap.min.js"></script> 
	<script type ="text/javascript" src="assets/js/bootstrap.js"></script>

</head>


<body>
<div class="container" style="margin-top:3%" >
	<div class="card text-center border-info mb-3 mx-auto" style="max-width: 620px;justify-content: center;" >
	<div class="card-header">
		<h2>Login</h2>
	</div>
<div class="card-body ">
	<?php
		if(isset($_GET['pesan'])){
			if($_GET['pesan']=="gagal"){
				echo "<div class='alert alert-danger'>Username dan Password tidak sesuai !</div>";
			}
		}
	?>
		<div class="row">
			<div class="col-sm">
<form id="login_form">
<h4></h4>
	<div class="form-group row justify-content-md-center">
	
	<label for="username" class="col-sm-3 col-form-label">Username</label>
	<div class="col-6 col-sm-5">
	<div id="error_msg" align="center"></div>
		<input type="text" class="form-control" id="username" value="" name="username" autocomplete="off" required>
	</div>
	</div>
	
	<div class="form-group row justify-content-md-center">
	
	<label for="password" class="col-sm-3 col-form-label">Password</label>
	<div class="col-6 col-sm-5">
	<div id="error_msg_pass" align="center"></div>
		<input type="password" class="form-control" id="password" value="" name="password" required>
	</div>
	</div>
	
	<div class="form-group row justify-content-md-center">
		
	<button class="btn btn-info" type="submit" name="login">Login</button> 

	</div>
	
	
</form>

</div></div></div>
</div>
</div>

<footer class="footer mt-auto py-3">
	<div class="container">
		<center>
			<span class="text-muted-dark">Anindi Putri Maharani &copy; 2020</span>
		</center>
	</div>
</footer>
		<!-- Bootstrap core JavaScript -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>