<?php 
 function connection(){
try {
    $conn = new PDO('mysql:host=localhost;dbname=opdracht-4', 'root','mysql' );
    return $conn;
    }
   

    catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
}


function functie(){
 	$sql='SELECT avatar, id, name , health , bio , color , attack , defense , weapon , armor FROM `characters` order by name';
	$conn = connection();
	$sth = $conn->prepare($sql);
	$sth->execute();
	$result= $sth->fetchall();


	$count = 0;
	return $result;
}

	function functie2() {

	 $count = $_GET["id"];
    $sql='SELECT avatar, id, name , health , bio , color , attack , defense , weapon , armor FROM `characters` WHERE id = ' . $count;
    	$conn = connection();
    $sth= $conn->prepare($sql);
    $sth->execute();
    $result= $sth->fetchall();
    return $result;
}



function countAllCharacters(){
	$conn = connection();

	$query2 = 'SELECT COUNT(name) FROM characters';

	$sth2 = $conn->prepare($query2);

	$sth2->execute();

	$qty = $sth2->fetch();
	return $qty;
}

function location(){
	$conn = connection();
		$query3 = 'SELECT name FROM locations';


		$sth3 = $conn->prepare($query3);

	$sth3->execute();

	$plaats = $sth3->fetch();

	return $plaats;
}
    ?>
