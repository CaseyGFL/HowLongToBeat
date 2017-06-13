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
                require_once 'connectdb.php';

                /* 
                 * To change this license header, choose License Headers in Project Properties.
                 * To change this template file, choose Tools | Templates
                 * and open the template in the editor.
                 */


                   $sql = "SELECT * FROM users";
                   $result = $conn->query($sql);

                    echo "Počet hráčů :". $result->rowCount() . "<br>";
                    echo "<div>Seznam Hráčů:</div>";
                    if($result->rowCount() > 0) {
                        while($row = $result->fetch()) {

                            echo '<a href="User.php?site=user&id='.
                                    $row["ID"].'">'.$row["name"].
                                    '</a>';
                            echo "<br>";
                        }
                    }
                ?>
        </div>
        
       
           
        
        
    </body>
</html>



