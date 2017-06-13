<html>
    <head>
        <meta charset="UTF-8">
        <title>HowLongToBeat</title>
        <link rel="stylesheet" type="text/css" href="css1.css">
    </head>
    <body>
        <div id="top">
            <a href="index.php">
            <h1 id="howlong">How long to beat</h1>
            </a>
            
        </div>
        
        <div id="menu">
            <a href="games.php">Games</a> <br>
            <a href="UserList.php">Users</a> <br>
            <a href="subscribe.php">Subscribe</a><br>
        </div>
        <div id="mid"> Check the category that best matches your play style, this is our best estimate for how long it will take you to complete the game. You can also click on the games individually to really break down the stats.</div>
        
        
    </body>
</html>
<?php
require_once './connectdb.php';

$id_g = filter_var($_POST["id_g"], FILTER_SANITIZE_STRING);
$id_p = filter_var($_POST["id_p"], FILTER_SANITIZE_STRING);
$time = filter_var($_POST["Time"], FILTER_SANITIZE_STRING);
$comment = filter_var($_POST["Comm"], FILTER_SANITIZE_STRING);
                
                $query = $conn->prepare("INSERT INTO subscriptions VALUES (NULL, ?, ?, ?, ?)");
                $query->bindParam(1, $id_p, PDO::PARAM_STR);
                $query->bindParam(2, $id_g, PDO::PARAM_INT);
                $query->bindParam(3, $time, PDO::PARAM_INT);
                $query->bindParam(4, $comment, PDO::PARAM_STR);
                if($query->execute() == 1) {
                    echo "Supr. Problém byl nahlášen. \"Jeho prdel zažije středověk\"<br>";
                }
                else {
                    echo "Problém se nepodařilo uložit<br>";
                }  

