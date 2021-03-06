<?php 

require 'function.php';
connection();
$result = functie();
$qty = countAllCharacters();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?php echo $qty[0] ?> characters uit de database</h1>

</header>
<div id="container"> 
    <?php foreach ($result as $row) { ?>
    <a class="item" href="character.php?id=<?php echo $row["id"]; ?>" style='width: 445px;'>
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $row["avatar"] ?>">
        </div>
        <div class="right">
            <h2><?php echo $row["name"] ?> </h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?php echo $row["health"] ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $row["attack"] ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $row["defense"] ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <?php $count++; }; ?>
</div>
<footer>&copy; Dirk hoogland 2021</footer>
</body>
</html>