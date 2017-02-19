# LibraryManager
A PHP web application for maintaining collage Library...


# Prerequisites

- setup mysql server
- create a table users
- Set the connection parameters in connection.php
- set below coloumns in the table users

<br/>
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
    <td></td>
  </tr>
  <tr>
    <td>username </td>
    <td>varchar(100)</td>
    <td>No</td>
    <td>None</td>
    <td></td>
  </tr>
    <tr>
    <td>password </td>
    <td>text</td>
    <td>Yes</td>
    <td>None</td>
    <td></td>
  </tr>
    <tr>
    <td>firstname </td>
    <td>text</td>
    <td>Yes</td>
    <td>None</td>
    <td></td>
  </tr>
    <tr>
    <td>lastname</td>
    <td>text</td>
    <td>Yes</td>
    <td>None</td>
    <td></td>
  </tr>
    <tr>
    <td>email</td>
    <td>varchar(150)</td>
    <td>Yes</td>
    <td>None</td>
    <td></td>
  </tr>
    <tr>
    <td>mobile </td>
    <td>varchar(100)</td>
    <td>Yes</td>
    <td>None</td>
    <td></td>
  </tr>
</table>
