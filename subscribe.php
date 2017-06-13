

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
        <div id="mid">
            <form action="aftersub.php" method="post">
                <textarea name="id_g">Zadejte id hry</textarea> <br>
                <textarea name="Time">Zadejte odehraný čas</textarea> <br>
                <textarea name="id_p">Zadejte vaše id</textarea> <br>
                <textarea name="Comm">Zadejte váš komentář</textarea> <br>
                <input type="submit">
</form></div>

    </body>
</html>

<?php
    require_once './connectdb.php';
     $sql = "SELECT * FROM subscriptions";
                   $result = $conn->query($sql);

                    echo "Počet her :". $result->rowCount() . "<br>";
                    echo "<div>Seznam dohrání:</div>";
                    if($result->rowCount() > 0) {
                        while($row = $result->fetch()) {

                            echo '<a href="oneGame.php?site=user&id='.
                                    $row["ID"].'"> Uživatel '.$row["gamer_id"]. "  Dohrál hru " . $row["game_id"]. "   za  " . $row["gametime"] . "minut" . "  a říká o ní toto:  " . $row["comment"] .
                                    '</a>';
                            echo "<br>";
                        }
                    }
   
   ?>

