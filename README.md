# LibraryManager
A PHP web application for maintaining collage Library...


# Prerequisites

- setup mysql server
- create a table users
- Set the connection parameters in connection.php
- set below coloumns in the table users

Name        Type					  Null	Default			Extra           <br/>
id          int(11)					No		None			AUTO_INCREMENT    <br/>
userlevel		varchar(100)		No		student	                    <br/>
username		varchar(100)		No		None	                      <br/>
password		text					  Yes		NULL                        <br/>
firstname		text					  Yes		NULL	                      <br/>
lastname		text					  Yes		NULL                        <br/>
email			  varchar(150)		Yes		NULL                        <br/>
mobile			varchar(100)		Yes		NULL	                      <br/>

<table style="width:100%">
  <tr>
    <th>Name</th>
    <th>Type</th> 
    <th>Null</th>
    <th>Default</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>id </td>
    <td>int(11)</td>
    <td>No</td>
    <td>None</td>
    <td>AUTO_INCREMENT</td>
  </tr>
  <tr>
    <td>userlevel </td>
    <td>varchar(100)</td>
    <td>No</td>
    <td>student</td>
  </tr>
  <tr>
    <td>username </td>
    <td>varchar(100)</td>
    <td>No</td>
    <td>None</td>
  </tr>
    <tr>
    <td>password </td>
    <td>text</td>
    <td>Yes</td>
    <td>None</td>
  </tr>
    <tr>
    <td>firstname </td>
    <td>text</td>
    <td>Yes</td>
    <td>None</td>
  </tr>
    <tr>
    <td>lastname</td>
    <td>text</td>
    <td>Yes</td>
    <td>None</td>
  </tr>
    <tr>
    <td>email</td>
    <td>varchar(150)</td>
    <td>Yes</td>
    <td>None</td>
  </tr>
    <tr>
    <td>mobile </td>
    <td>varchar(100)</td>
    <td>Yes</td>
    <td>None</td>
  </tr>
</table>
