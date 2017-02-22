<?php
	require_once('connection.php');

	mysqli_set_charset( $conn, 'utf8');
	$query = "SELECT * FROM users";
	$result = mysqli_query($conn,$query);
	//$row = mysqli_fetch_array($result);
	echo "<link rel='stylesheet' href='css/main.css'>";
	echo "<table >
	<tr>
		<th>ID</th>
		<th>Photo</th>
		<th>userlevel</th> 
		<th>username</th>
		<th>firstname</th>
		<th>lastname</th>
		<th>email</th>
		<th>mobile</th>
	</tr>";

	while($row = mysqli_fetch_array($result)){
		$avtar =$row['avtar'];
		$id = $row['id'];
		$userlevel = $row['userlevel'];
		$username = $row['username'];
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];
		$email = $row['email'];
		$mobile = $row['mobile'];
		outputUsersTable($avtar,$id,$userlevel,$username,$firstname,$lastname,$email,$mobile);
	}
	
	echo "</table>";

function outputUsersTable($avtar,$id,$userlevel,$username,$firstname,$lastname,$email,$mobile){
		echo "<tr>".
				"<td>".$id ."</td>".
				"<td>"."<img src='$avtar' alt='' border=3 height=100 width=95>" ."</td>".
				"<td>".$userlevel ."</td>".
				"<td>".$username."</td>".
				"<td>".$firstname."</td>".
				"<td>".$lastname."</td>".
				"<td>".$email."</td>".
				"<td>".$mobile."</td>".
			"</tr>";
}


mysqli_close($conn);

?>