<?php

include 'database.php';

session_start();

if (isset($_SESSION["loggedin"])) {
	header("Location: halaman_admin.php");
	exit;
}

if (isset($_POST["username"]) && isset($_POST["password"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM `login` WHERE user = '$username' AND pass = '$password' ");

	if (mysqli_num_rows($result) > 0) {
		// echo "Login berhasil";

		$hasil = mysqli_fetch_array($result);

		$_SESSION["loggedin"] = 1;
		$_SESSION["username"] = $username;
		$_SESSION['password'] = $password;
		
		
	} else {
		header("Location: index.php?pesan=gagal");
	}
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Halaman Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initialscale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: -ms-flexbox;
			display: -webkit-box;
			display: flex;
			-ms-flex-align: center;
			-ms-flex-pack: center;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #E6E6FA;
		}

		.form-signin {
			width: 100%;
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}

		.form-signin .checkbox {
			font-weight: 400;
		}

		.form-signin .form-control {
			position: relative;
			box-sizing: border-box;
			height: auto;
			padding: 10px;
			font-size: 16px;
		}

		.form-signin .form-control:focus {
			z-index: 2;
		}

		.form-signin input[type="username"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}

		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}
	</style>
</head>

<body class="text-center">
	<?php
	if (isset($_GET['pesan'])) {
		if ($_GET['pesan'] == "gagal") {
			echo "<script>alert('Username dan Password tidak sesuai !');</script>";
		}
	}
	?>
	<form class="form-signin" action="" method="POST">
		<img class="mb-4" src="logo kabeltelekom.png" alt="" width="100" height="100">
		<h1 class="h3 mb-3 font-weight-normal" style="font-family: Berlin Sans FB;">Log in</h1>
		<label for="inputUsername" class="sr-only">Username</label>
		<input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
		<label for="inputPassword" class="sr-only">Password</label>
		<input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
		<div class="checkbox mb-3">
			<!-- <label>
				<input type="checkbox" value="remember-me"> Remember me
			</label> -->
		</div>
		<button class="btn btn-lg btn-success btn-block" type="submit" style="margin: 25px 0px 0px 0px;"><b>Log In</b></button>
		<!-- <p class="mt-5 mb-3 text-muted">&copy; 2020-2021</p> -->
	</form>
</body>
<script>
	var today = new Date();
	var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
	var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
	document.getElementById("last_login").value = date + " " + time;
	document.getElementById("create_login").value = date + " " + time;
</script>

</html>

