 <!DOCTYPE html>
<?php require_once 'connectdb.php';
 
if(isset($_GET["site"])) {
        $request = $_GET["site"];
    }
 else {
   $request = "default.php";    
}
switch ($request){
case "games" : $result = "games.php";
        break;
}
$site="games.php";
?>
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
