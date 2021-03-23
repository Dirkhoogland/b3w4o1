<?php 
require 'connection.php';
// include_once 'character.php'; 
    

 
$sql='SELECT name , health , bio , color , attack , defense , weapon , armor FROM `characters` order by name';
$sth= $conn->prepare($sql);
$sth->execute();
$result= $sth->fetchall();

print_r($result[1]['name']);

 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>index</title>
 </head>
 <body>
<table border ="1">
	<thead>
		<td>Name</td>
		<td>max health</td>
		<td>attack</td>
		<td>defense</td>
		<td>agility</td>
	</thead>


</table>
 <p id="footer">dirk hoogland 2021</p>
 </body>
 </html>