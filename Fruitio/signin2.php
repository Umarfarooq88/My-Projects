<!DOCTYPE html>
<html>
<head>
	<title>Fruitio-Login</title>
	<link rel="stylesheet" type="text/css" href="signin2.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

</head>
<body>
<?php
	$ServerName = "localhost";
	$pass = "";
	$userName = "root";
	$database = "fruitio";
	$connection = mysqli_connect($ServerName,$userName,$pass,$database);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	session_start();
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	$role = $_POST['role'];	
	$gender = $_POST['gender'];
	if ($password1 == $password2) {
		$sql = "INSERT INTO `details` (`Name`, `Email`, `Phone`, `Password`, `Role`, `Gender`) VALUES ('$name', '$_SESSION[email]', '$phone', '$password2', '$role', '$gender')";
		$con1 = mysqli_query($connection, $sql);
		if ($con1)
			echo ("Success!!");
		else
			echo "<br>Table creation unsuccessful" . mysqli_error($connection);
	}else{
		// echo ('error111');
	}

}
?>
    
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true">Admin login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<a href="option.html" class="btn btn-rounded">Login</a>				
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">User login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<a href="option.html" class="btn btn-rounded">Login</a>				
				</form>
			</div>
	</div>
</body>
</html>