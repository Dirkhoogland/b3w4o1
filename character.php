<?php 

require 'function.php';
connection();
$result = functie2();
$plaats = location();
 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character <?php  echo $result[0]['name'];  ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo $result[0]['name']; ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $result[0]['avatar']; ?>">
            <div class="stats" style="background-color: yellowgreen">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?php echo $result[0]['health']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $result[0]['attack']; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $result[0]['defense']; ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php echo $result[0]['weapon']; ?></li>
                    <li><b>Armor</b>: <?php echo $result[0]['armor']; ?></li>
                </ul>
            </div>
                    <form>
                     <label><b>Huidige Locatie:<?php echo $plaats[0]['location'] ?></b></label>
                        <select>
                         <option value="1"><?php echo $plaats[0]['location'] ?></option>
                        </select>
                        <input type="submit" value="update">
                    </form>

        </div>
        <div class="right">
            <p>
                <?php echo $result[0]['bio']; ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Dirk hoogland 2021</footer>
</body>
</html>