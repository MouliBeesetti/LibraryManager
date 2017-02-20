<?php
	include_once("connection.php");

	mysqli_set_charset( $conn, 'utf8');
	$query = "SELECT * FROM users";
	$result = mysqli_query($conn,$query);
	//$row = mysqli_fetch_array($result);
	echo "<link rel='stylesheet' href='css/main.css'>";
	echo "<table >
	<tr>
		<th>ID</th>
		<th>userlevel</th> 
		<th>username</th>
		<th>password</th>
		<th>firstname</th>
		<th>lastname</th>
		<th>email</th>
		<th>mobile</th>
	</tr>";

	while($row = mysqli_fetch_array($result)){
		$id = $row['id'];
		$userlevel = $row['userlevel'];
		$username = $row['username'];
		$password = $row['password'];
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		outputUsersTable($id,$userlevel,$username,$password,$firstname,$lastname,$email,$mobile);
	}
	
	echo "</table>";

function outputUsersTable($id,$userlevel,$username,$password,$firstname,$lastname,$email,$mobile){
		echo "<tr>".
				"<td>".$id ."</td>".
				"<td>".$userlevel ."</td>".
				"<td>".$username."</td>".
				"<td>".$password."</td>".
				"<td>".$firstname."</td>".
				"<td>".$lastname."</td>".
				"<td>".$email."</td>".
				"<td>".$mobile."</td>".
			"</tr>";
}




?>