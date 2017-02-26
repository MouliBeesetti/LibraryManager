<?php

session_start();
$_SESSION['message'] = '';

require('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
//define variables
$username = mysqli_real_escape_string($conn,$_POST["username"]);
$password = mysqli_real_escape_string($conn,$_POST["password"]);
$confirmpassword = mysqli_real_escape_string($conn,$_POST["confirmpassword"]);
$firstname = mysqli_real_escape_string($conn,$_POST["firstname"]);
$lastname = mysqli_real_escape_string($conn,$_POST["lastname"]);
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$hased_password = password_hash($password,PASSWORD_DEFAULT);
$avatar_path = mysqli_real_escape_string($conn,('images/avtars/'.$_FILES['avatar']['name']));

if (preg_match("!image!",$_FILES['avatar']['type'])) {
            	
	
if($password == $confirmpassword ){
	//mysql query
	//mysqli_set_charset( $conn, 'utf8');
if($result = $conn->real_query("INSERT INTO users(username,password,firstname,lastname,email,mobile,avtar) VALUES('$username','$hased_password','$firstname','$lastname','$email','$mobile','$avatar_path')")){
	//copy image to images/ folder 
if (copy($_FILES['avatar']['tmp_name'], $avatar_path)){
	$_SESSION['message'] = 'Sucessfully Registered!';	
	}else {
        $_SESSION['message'] = 'File upload failed!';
      }
}else{
	$_SESSION['message'] = 'Username already exists!';
	
}
	
}
else {
	$_SESSION['message'] = 'Password and Confirm password doesn\'t match!';
}
session_destroy();
mysqli_close($conn);
}else {
        $_SESSION['message'] = 'Please only upload GIF, JPG or PNG images!';
      }
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Account</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<header>
	<h1 class = "title">
	Create a new account
	</h1>
</header>
<article>
<div class="formbg">
<form action="signup.php" method="post" enctype="multipart/form-data" autocomplete="off" >
			<input type = "varchar" name= "username" placeholder="Username" required><br/>
			<input type = "password" name= "password" placeholder="Password" required><br/>
			<input type = "password" name= "confirmpassword" placeholder="Confirm Password" required><br/>
			<input type = "text" name= "firstname" placeholder="First Name" required><br/>
			<input type = "text" name= "lastname" placeholder="Last Name" required><br/>
			<input type = "email" name= "email" placeholder="Email ID" required ><br/>
			<input type = "varchar" name= "mobile" placeholder="Mobile No" required ><br/>
			<label>Select your avatar: </label>
			<input class="noborder" type="file" name="avatar" accept="image/*" required />
			<button type = "submit" value="submit">Sign up</button>&nbsp
			<div class="alert"><?= $_SESSION['message'] ?></div>
</form>
</div>

</article>
	<footer>
	<?php	
		include("links.php");	
	?>
	<p>Copyright &copy; Mouli Beesetti 2017<p>
	</footer>
</body>
</html>