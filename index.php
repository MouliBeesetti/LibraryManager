<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Library Manager</title>
	<link rel="stylesheet" href="css/main.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
</head>
<body>

	

<header>
	<h1 id = "maintitle">
	Welcome to Library Manager
	</h1>
</header>
<article>
    <aside>

    </aside>
		<div class="formbg">
			<form method= "post" action="index.php" enctype="multipart/form-data" autocomplete="off">
				<input type = "varchar" name= "username" placeholder="Username"><br/>
				<input type = "password" name= "password" placeholder="Password"><br/>
				<button name = "login" type = "submit">Login</button>&nbsp
				<a href="signup.php">New User?</a>&nbsp
			</form>
		
<?php
if(isset($_POST['login'])){
	
require_once('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//define variables
$username = $_POST["username"];
$password = $_POST["password"];
mysqli_set_charset( $conn, 'utf8');
$query = "SELECT password,userlevel FROM users WHERE username='$username'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result);
$hashed_password = $row['password'];
$userlevel = $row['userlevel'];

if(password_verify($password,$hashed_password)){	
if($userlevel == "student"){
	
	echo "Login Sucecessful!";
	header("Location: student.php");
	die();	
}else if($userlevel == "admin" ){
	
	echo "Login Sucecessful!";
	header("Location: admin.php");
	die();
	
	
}
else if($userlevel == "staff"){
	
	echo "Login Sucecessful!";
	header("Location: staff.php");
	die();
	
}else{
	
	echo "Invalid User Type!";
	die();
}
}else{
	
	echo "Please check username and password!";

	
}
mysqli_close($conn);
}}
?>
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
