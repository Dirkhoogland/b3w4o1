<?php 
require 'connection.php';
include_once 'character.php'; 

try {
    $dbh = new PDO('mysql:host=localhost;dbname=opdracht-4', 'root','mysql' );
    }

    catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$list = "SELECT name , health , bio , color , attack , defense , weapon , armor FROM `characters` order by name";


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>index</title>
 </head>
 <body>

 	<<?php echo $list ?>
<tr>
	<th>Name</th>
	<th>Health</th>
	<th>Bio</th>
	<th>color</th>
	<th>attack</th>
	<th>defense</th>
	<th>weapon</th>
	<th>armor</th>
</tr>



 <p id="footer">dirk hoogland 2021</p>
 </body>
 </html>