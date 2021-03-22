<?php 
// require 'connection.php';
// include_once 'character.php'; 
    
try {
    $conn = new PDO('mysql:host=localhost;dbname=opdracht-4', 'root','mysql' );
    }
   

    catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
 
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

 <p id="footer">dirk hoogland 2021</p>
 </body>
 </html>