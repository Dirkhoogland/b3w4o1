<?php
	 include 'connection.php';
	 $count = $_GET["id"];
    $sql='SELECT avatar, id, name , health , bio , color , attack , defense , weapon , armor FROM `characters` WHERE id = ' . $count;
    $sth= $conn->prepare($sql);
    $sth->execute();
    $result= $sth->fetchall();

?>
