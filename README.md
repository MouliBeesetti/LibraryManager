# LibraryManager
A PHP web application for maintaining collage Library...


# Prerequisites

- setup mysql server
- create a table users
- Set the connection parameters in connection.php
- set below coloumns in the table users

#	Name				Type							Null	Default			Extra
1	idPrimary		int(11)						No		None				AUTO_INCREMENT
2	userlevel		varchar(100)			No		student	
3	username		varchar(100)			No		None	
4	password		text							Yes		NULL
5	firstname		text							Yes		NULL	
6	lastname		text							Yes		NULL
7	email				varchar(150)			Yes		NULL
8	mobile			varchar(100)			Yes		NULL	
