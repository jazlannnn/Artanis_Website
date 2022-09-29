<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['email'])) {
	header("Location: dev ezran.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['email'] = $row['email'];
		header("Location: dev ezran.php");
	} else {
		echo "<script>alert('Woops! Username or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="login_style.css">

	<title>Artanis Login Form </title>
</head>

<body>

	<div class="container">
		<form action="" method="POST" class="login-email">
			<div class="row">
				<div class="col-md-6">
					<div class="col-md-4" style="text-align: center;">
						<img class="logo" src="images/logo.png" style="text-align:center"; onclick="window.location.href='https://www.artaniscloud.com'"></img>
					</div>
				</div>
			</div><br>
			<div class=" input-group">
						<input type="username" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
					</div>
					<div class="input-group">
						<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
					</div>
					<div class="input-group">
						<button name="submit" class="btn">Login</button>
					</div>
					
		</form>
	</div>
</body>

</html>