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
if($password == $confirmpassword ){

if (preg_match("!image!",$_FILES['avatar']['type'])) {
    $explode = explode('.', $_FILES["avatar"]["name"]);
    $ext = end($explode);
    $imageName = $username .'.'. $ext;
    $imagePath = "images/userPhotos/" . $imageName;
	//mysql query
	//mysqli_set_charset( $conn, 'utf8');
    $query = "INSERT INTO users(username,password,firstname,lastname,email,mobile,avtar) VALUES('$username','$hased_password','$firstname','$lastname','$email','$mobile','$imagePath')";
    if($result =  mysqli_query($conn,$query)){
    //copy image to images/ folder
if (copy($_FILES['avatar']['tmp_name'], $imagePath)){
	$_SESSION['message'] = 'Successfully Registered!';
	}else {
        $_SESSION['message'] = 'File upload failed!';
      }
}else{
	$_SESSION['message'] = 'Username already exists!';
	
}
	
}
else {
    $_SESSION['message'] = 'Please upload GIF, JPG or PNG images only! ';

}
}else {
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
<body>
<header>
	<h1 class = "title">
	Create a new account
	</h1>
</header>
<article>
<div class="formbg">
<form action="signup.php" method="post" enctype="multipart/form-data" autocomplete="off" >
			<input type = "text" name= "username" placeholder="Username" required><br/>
			<input type = "password" name= "password" placeholder="Password" required><br/>
			<input type = "password" name= "confirmpassword" placeholder="Confirm Password" required><br/>
			<input type = "text" name= "firstname" placeholder="First Name" required><br/>
			<input type = "text" name= "lastname" placeholder="Last Name" required><br/>
			<input type = "email" name= "email" placeholder="Email ID" required ><br/>
			<input type = "number" name= "mobile" placeholder="Mobile No"><br/>
			<label>Select your Photo : </label>
			<input class="noborder" type="file" name="avatar" accept="image/*" required />
			<button type = "submit" value="submit">Sign up</button>&nbsp
            <button type="reset">Reset</button>&nbsp
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
