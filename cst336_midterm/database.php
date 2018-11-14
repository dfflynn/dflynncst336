<?php
// connect to our mysql database server

function getDatabaseConnection() {
    $host = "localhost";
    $username = "david";
    $password = "cst336"; //best practice: defined in separate file that is never committed to github.
    $dbname = "midterm"; 
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}



?>
