<?php 
 include 'connection.php';


 $sql='SELECT avatar, id, name , health , bio , color , attack , defense , weapon , armor FROM `characters` order by name';
$sth= $conn->prepare($sql);
$sth->execute();
$result= $sth->fetchall();
$query2 = 'SELECT COUNT(name) FROM characters';

$sth2 = $conn->prepare($query2);

$sth2->execute();

$qty = $sth2->fetch();

$count = 0;
    ?>