# LibraryManager
A PHP web application for maintaining collage Library...


# Prerequisites

- setup mysql server
- create a table users
- Set the connection parameters in connection.php
- set below coloumns in the table users

Name			Type					Null	Default			Extra
idPrimary		int(11)					No		None			AUTO_INCREMENT
userlevel		varchar(100)			No		student	
username		varchar(100)			No		None	
password		text					Yes		NULL
firstname		text					Yes		NULL	
lastname		text					Yes		NULL
email			varchar(150)			Yes		NULL
mobile			varchar(100)			Yes		NULL	