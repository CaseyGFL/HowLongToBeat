
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
                            <?php
                require_once './connectdb.php';
              
                   $sql = "SELECT * FROM games";
                   $result = $conn->query($sql);

                    echo "Počet her :". $result->rowCount() . "<br>";
                    echo "<div>Seznam Her:</div>";
                    if($result->rowCount() > 0) {
                        while($row = $result->fetch()) {

                            echo '<a href="oneGame.php?site=user&id='.
                                    $row["ID"].'"> Jméno: '.$row["name"]. "<br>ID: " . $row["ID"].
                                    '</a>';
                            echo "<br>";
                        }
                    } ?>
        </div>
        
        
    </body>
</html>
