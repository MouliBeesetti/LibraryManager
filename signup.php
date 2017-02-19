<?php

session_start();
$_SESSION['message'] = '';

require_once('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
//define variables
$username = $_POST["username"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$hased_password = password_hash($password,PASSWORD_DEFAULT);
if($password == $confirmpassword ){
	//mysql query
	//mysqli_set_charset( $conn, 'utf8');
	$result = $conn->real_query("INSERT INTO users(username,password,firstname,lastname,email,mobile) VALUES('$username','$hased_password','$firstname','$lastname','$email','$mobile')");
	$_SESSION['message'] = 'Sucessfully Registered!';
}
else {
	$_SESSION['message'] = 'Password and Confirm password doesn\'t match!';
}
session_destroy();
mysqli_close($conn);
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Account</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<header>
	<h1 class = "title">
	Create a new account
	</h1>
</header>
<body>
<div class="formbg">
<form action="signup.php" method="post" autocomplete="off" >
			<input type = "varchar" name= "username" placeholder="Username" required><br/>
			<input type = "password" name= "password" placeholder="Password" required><br/>
			<input type = "password" name= "confirmpassword" placeholder="Confirm Password" required><br/>
			<input type = "text" name= "firstname" placeholder="First Name" required><br/>
			<input type = "text" name= "lastname" placeholder="Last Name" required><br/>
			<input type = "email" name= "email" placeholder="Email ID" required ><br/>
			<input type = "varchar" name= "mobile" placeholder="Mobile No" required ><br/>
			<button type = "submit" value="submit">Sign up</button>&nbsp
			<div class="alert"><?= $_SESSION['message'] ?></div>
</form>
</div>
	<footer>
	<?php	
		include("links.php");	
	?>
	<p>Copyright &copy; Mouli Beesetti 2017<p>
	</footer>
</body>
</html>