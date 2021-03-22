<?php 
require 'connection.php';
include_once 'character.php'; 

try {
    $dbh = new PDO('mysql:host=localhost;dbname= opdracht-4', 'root','mysql' );
    }
    $dbh = null;

    catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


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