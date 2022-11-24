<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to Login Page</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	 <nav class="navbar navbar-light navbar-expand-lg bg-dark py-lg-4" id="mainNav">
        <div class="container"><a class="navbar-brand text-uppercase text-expanded" href="#">Genol Group System</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav mx-auto">
                    <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Register</a></li> -->
                </ul>
        </div>
        </div>
    </nav>
    <div class="global-container" style="width: 26%; margin:auto; margin-top: 54px;">
		<div class="card login-form">
				<div class="card-body">
					<h3 class="card-title text-center">Log in</h3>
					<div class="card-text">
						<!--
					<div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
						<form method="POST">
							<!-- to error: add class "has-danger" -->
							<div class="form-group">
								<label for="exampleInputEmail1">Username</label>
								<input type="text" class="form-control form-control-sm" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
							</div>
							<br>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<br>
								<a href="#" style="float:right;font-size:12px;">Forgot password?</a>
								<input type="password" name="password" class="form-control form-control-sm" id="exampleInputPassword1">
							</div>
							<type="submit" div class="container mt-4">
							<div>
								<button type = "submit"  class="btn-login" style="width: 280px; border-radius: 6px; background-color: #ec9006;" >Sign in</button>
							<br>
							<div class="sign-up">
								Don't have an account? <a href="registration.php">Create One</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

</body>
</html>

<?php
	
if (isset($_POST['username'])) {
	
require_once "config.php";

$username = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = trim($_POST['username']);
		$password = hash('md5', trim($_POST['password']));

		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			
			$row = mysqli_fetch_assoc($result);

			if ($row['username'] === $username && $row['password'] === $password) {
				echo "<script>alert('Successfully Login!')</script>";
				header("location: indexSports.php");
			}
		} else {
			echo "<script>alert('Invalid username and password!')</script>";
		}
		// if ($row) {
		// 	header("location: indexSports.php");
		// } else {
		// 	echo "Something went wrong. Please try again later.";
		// }
	}
}
?>