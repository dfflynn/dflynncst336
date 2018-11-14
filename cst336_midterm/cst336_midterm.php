<?php
include 'database.php';
function printQuote() {
    $dbConn = getDatabaseConnection(); 
    $sql = "SELECT * from q_quotes ORDER BY RAND() LIMIT 1";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(); 
    foreach ($records as $record) {
        echo "<div>";
        echo "<h1>";
        echo $record["quote"];
        echo "</h1>";
        echo "<h2>";
        echo '-';
        echo $record["author"];
        echo "</h2>";
        echo "</div>";
    }
}
function addQuote($quote, $author) {
    $dbConn = getDatabaseConnection();
    $sql = "INSERT INTO `q_quotes` (`quoteId`, `quote`, `author`) VALUES (NULL, '$quote', '$author');"; 
    $statement = $dbConn->prepare($sql); 
    $statement->execute(); 
}

if ($_POST['quote'] != "" && $_POST['author'] != "") {
    addQuote($_POST['quote'], $_POST['author']); 
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Welcome</title>
    <link href = "./styles.css" rel = "stylesheet" type="text/css" />
    </head>
    <body>
    <?php
    printQuote();
    ?>
    <br/>
    <br/>
    <br/>
    <a href="./create.php">Create</a>
    </body>
</html>