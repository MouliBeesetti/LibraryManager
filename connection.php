<?php
	
//connection.php

//connection parameters
$servername = "localhost";
$server_username = "root";
$server_password = "mouli";
$server_database = "mouli";

//setting connection
$conn = new mysqli($servername, $server_username, $server_password,$server_database);
mysqli_set_charset( $conn, 'utf8');

//echo "Connection Sucessfull";
?>