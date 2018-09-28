<!DOCTYPE html>
<html>
    <head>
        <meta char=”utf-8” />
        <title>Tic Tac Toe</title>
        <link href = "./styles.css" rel = "stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet"> 
    </head>
    <body>

        <div align = "center" id = "header">
            <img src="toelogo.png" alt="logo" id = "headerimg"> 
        </div>
        

        <div align = "center" id = "grid">
        <?php
        include "toe.php";
        run();
        ?>
        
        <a href = "."><img src="tropylink.png" alt="trophy" id = "trophy"> </a>
        
    
        </div>
        
        
        
    
    
    
    </body>
</html>