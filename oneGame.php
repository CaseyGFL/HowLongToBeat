
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
                if(isset($_GET["id"])) {

                     $id = $_GET["id"];
                    $sql = "SELECT * FROM games WHERE ID=?";
                    $query = $conn->prepare($sql);
                    $query->bindParam(1, $id, PDO::PARAM_INT);
                    $result = $query->execute();
                    if($query->rowCount() > 0) {

                        while($row = $query->fetch()) {
                            echo "Jméno: " . $row["name"] . "<br>";
                            echo "Rok vydání: " . $row["year"] . "<br>";
                            echo "Cena vydání: " . $row["price"] . "Kč" . "<br>";
                            echo "Hodnocení: " . $row["rating"] . "<br>";

                        }
                    }
                    else {
                        echo "<br>Bezproblémový jedinec<br>";
                    }
                } ?>
        </div>
        
        
    </body>
</html>
