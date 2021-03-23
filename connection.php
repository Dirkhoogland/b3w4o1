<?php 
try {
    $conn = new PDO('mysql:host=localhost;dbname=opdracht-4', 'root','mysql' );
    }
   

    catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

