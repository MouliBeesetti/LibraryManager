# LibraryManager
A PHP web application for maintaining collage Library...


# Prerequisites

- setup mysql server
- create a table users
- Set the connection parameters in connection.php
- set below coloumns in the table users

Name			  Type					  Null	Default			Extra           <br/>
idPrimary		int(11)					No		None			AUTO_INCREMENT    <br/>
userlevel		varchar(100)		No		student	                    <br/>
username		varchar(100)		No		None	                      <br/>
password		text					  Yes		NULL                        <br/>
firstname		text					  Yes		NULL	                      <br/>
lastname		text					  Yes		NULL                        <br/>
email			  varchar(150)		Yes		NULL                        <br/>
mobile			varchar(100)		Yes		NULL	                      <br/>
