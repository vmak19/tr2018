<?php 
    session_start();
    $session_name="collected";
    $urlParamName="collect";
    $idsCollected="";
    
    //Is a new client, set collected to beginning
    if(!isset($_SESSION[$session_name])) {
        echo "Making new session<br>";
        $_SESSION[$session_name]="000";
    } else { //Else, start processing 
        echo "Old value is: " . $_SESSION[$session_name]."<br>";
        
        //register the code collected by set that ID's index to 1
        if(isset($_GET[$urlParamName]))  {
            $_SESSION[$session_name][$_GET[$urlParamName]-1] = '1';
            echo "Value NOW is: " . $_SESSION[$session_name];
            $idsCollected=$_SESSION[$session_name];
        }
    }
?>

<html>
    <head>
        <meta charset="windows-1252">
        <title></title>
    </head>
    <body>
        <?php
            if($idsCollected == "111") {
                echo "All QR are collected! Show this screen to collect your prize here:<br>";
            }
            
            
            if(isset($_GET["collect"])) { //register the code collected then
               echo "<h1>Hello. You scanned #" . $_GET["collect"] . "</h1><br>"; 
            } elseif(isset($_GET["action"])) {
                echo "<h1>Hello. You want to do this action: " . $_GET["action"] . "</h1><br>"; 
            } else {
                echo "Welcome"."<br>";
            }            
    
            
        ?>
    </body>
</html>
