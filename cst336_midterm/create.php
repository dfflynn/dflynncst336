<!DOCTYPE html>
<html>
    <head>
    <title>Welcome</title>
    <link href = "./styles.css" rel = "stylesheet" type="text/css" />
    </head>
    <body>
    <h1>Create a new quote:</h1>
    <?php
    if(!isset($_POST['quote'])) {
        echo "<ul><li>Text must not be empty</li>";
    }
    if(!isset($_POST['author'])) {
        if(isset($_POST['quote'])) {
        echo "<ul>";
    }
        echo "<li>Author must not be empty</li>";
    }
    echo "</ul>";
    ?>
    <form method="post" action = "./cst336_midterm.php">
        Text: <input type="text" name="quote"></input> <br/><br/>
        Author: <input type="text" name="author"></input> <br/><br/>
        <input type="submit"></input>
    </form>
    </body>
</html>