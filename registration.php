<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="global-container" style="width: 26%; margin:auto;margin-top: 90px;">
		<div class="card login-form">
				<div class="card-body">
					<h3 class="card-title text-center">Sign Up</h3>
					<div class="card-text">
					<form action="" method="POST" >
						<div>
							<label>Fullname</label>
							<input type="text" name="fullname" class="form-control form-control-sm">
						</div>
						<br>
						<div>
							<label>Username</label>
							<input type="text" class="form-control form-control-sm" name="username">
						</div>
						<br>
						<div>
							<label>Password</label>
							<input type="password" class="form-control form-control-sm" name="password">
						</div>
						
						<br>
						<div style="text-align: center;">
							<button type="submit" class="btn btn-primary btn-block">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>	
</body>
</html>
<?php
	require_once "config.php";

	if (isset($_POST['fullname'])) {
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = hash('md5',$_POST['password']);
		
		$sql = "INSERT INTO users (fullname, username, password) VALUES ('$fullname', '$username', '$password')";

          if (mysqli_query($conn, $sql)) {
			echo "<script>alert('Successfully added!')</script>";

          } else {
               echo "Something went wrong. Please try again later.";
          }
	}
?>